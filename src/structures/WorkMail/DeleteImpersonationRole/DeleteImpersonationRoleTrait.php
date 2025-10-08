<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteImpersonationRole;

trait DeleteImpersonationRoleTrait
{
    /**
     * @param DeleteImpersonationRoleRequest $args
     * @return DeleteImpersonationRoleResponse
     */
    public function deleteImpersonationRole(DeleteImpersonationRoleRequest $args)
    {
        $result = parent::deleteImpersonationRole($args->toArray());
        return new DeleteImpersonationRoleResponse($result->toArray());
    }
}
