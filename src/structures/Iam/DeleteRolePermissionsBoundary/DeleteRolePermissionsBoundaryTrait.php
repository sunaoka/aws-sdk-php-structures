<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteRolePermissionsBoundary;

trait DeleteRolePermissionsBoundaryTrait
{
    /**
     * @param DeleteRolePermissionsBoundaryRequest $args
     * @return void
     */
    public function deleteRolePermissionsBoundary(DeleteRolePermissionsBoundaryRequest $args)
    {
        parent::deleteRolePermissionsBoundary($args->toArray());
    }
}
