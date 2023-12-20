<?php
namespace App\Repositories;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use App\Enums\UsersTableEnum;
use Illuminate\Support\Facades\Schema;

class UserRepository{
	

	public function getAvailableColumns()
	{
		$model = new User;

		$columns = Schema::getColumnListing( $model->getTable() );

    	$columnsCanShow = UsersTableEnum::getInstances();

    	$users = User::select($columnsCanShow)->paginate(2);

    	$columns = UsersTableEnum::getColumnsWithLables();

    	$users = UserCollection::make($users)->additional(['columns'=>$columns]);
    	return $users;
	}


}

?>