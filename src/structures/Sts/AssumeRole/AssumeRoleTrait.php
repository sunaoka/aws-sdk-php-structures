<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRole;

trait AssumeRoleTrait
{
    /**
     * @param AssumeRoleRequest $args
     * @return AssumeRoleResponse
     */
    public function assumeRole(AssumeRoleRequest $args)
    {
        $result = parent::assumeRole($args->toArray());
        return new AssumeRoleResponse($result->toArray());
    }
}
