<?php

namespace Sunaoka\Aws\Structures\Iam\ListInstanceProfilesForRole;

trait ListInstanceProfilesForRoleTrait
{
    /**
     * @param ListInstanceProfilesForRoleRequest $args
     * @return ListInstanceProfilesForRoleResponse
     */
    public function listInstanceProfilesForRole(ListInstanceProfilesForRoleRequest $args)
    {
        $result = parent::listInstanceProfilesForRole($args->toArray());
        return new ListInstanceProfilesForRoleResponse($result->toArray());
    }
}
