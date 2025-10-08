<?php

namespace Sunaoka\Aws\Structures\Iam\PutRolePermissionsBoundary;

trait PutRolePermissionsBoundaryTrait
{
    /**
     * @param PutRolePermissionsBoundaryRequest $args
     * @return void
     */
    public function putRolePermissionsBoundary(PutRolePermissionsBoundaryRequest $args)
    {
        parent::putRolePermissionsBoundary($args->toArray());
    }
}
