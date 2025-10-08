<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteUserPermissionsBoundary;

trait DeleteUserPermissionsBoundaryTrait
{
    /**
     * @param DeleteUserPermissionsBoundaryRequest $args
     * @return void
     */
    public function deleteUserPermissionsBoundary(DeleteUserPermissionsBoundaryRequest $args)
    {
        parent::deleteUserPermissionsBoundary($args->toArray());
    }
}
