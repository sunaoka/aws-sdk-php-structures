<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterIamRoles;

trait ModifyClusterIamRolesTrait
{
    /**
     * @param ModifyClusterIamRolesRequest $args
     * @return ModifyClusterIamRolesResponse
     */
    public function modifyClusterIamRoles(ModifyClusterIamRolesRequest $args)
    {
        $result = parent::modifyClusterIamRoles($args->toArray());
        return new ModifyClusterIamRolesResponse($result->toArray());
    }
}
