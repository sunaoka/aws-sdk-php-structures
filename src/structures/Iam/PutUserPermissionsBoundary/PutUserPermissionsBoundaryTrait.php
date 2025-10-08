<?php

namespace Sunaoka\Aws\Structures\Iam\PutUserPermissionsBoundary;

trait PutUserPermissionsBoundaryTrait
{
    /**
     * @param PutUserPermissionsBoundaryRequest $args
     * @return void
     */
    public function putUserPermissionsBoundary(PutUserPermissionsBoundaryRequest $args)
    {
        parent::putUserPermissionsBoundary($args->toArray());
    }
}
