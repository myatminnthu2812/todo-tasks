<?php

namespace App\Repositories;

use App\User;

class TaskRepository 
{
	/**
	 * Get all of the tasks for a given user.
	 *
	 * @param  User  $user
	 * @return Collection
	 */
	public function getByUser(User $user)
	{
		return $user->tasks()
					->orderBy('created_at', 'asc')
					->paginate(5);
	}
}