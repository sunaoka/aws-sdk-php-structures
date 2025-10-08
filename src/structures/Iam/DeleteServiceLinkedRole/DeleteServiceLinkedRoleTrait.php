<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteServiceLinkedRole;

trait DeleteServiceLinkedRoleTrait
{
    /**
     * @param DeleteServiceLinkedRoleRequest $args
     * @return DeleteServiceLinkedRoleResponse
     */
    public function deleteServiceLinkedRole(DeleteServiceLinkedRoleRequest $args)
    {
        $result = parent::deleteServiceLinkedRole($args->toArray());
        return new DeleteServiceLinkedRoleResponse($result->toArray());
    }
}
