<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateImpersonationRole;

trait UpdateImpersonationRoleTrait
{
    /**
     * @param UpdateImpersonationRoleRequest $args
     * @return UpdateImpersonationRoleResponse
     */
    public function updateImpersonationRole(UpdateImpersonationRoleRequest $args)
    {
        $result = parent::updateImpersonationRole($args->toArray());
        return new UpdateImpersonationRoleResponse($result->toArray());
    }
}
