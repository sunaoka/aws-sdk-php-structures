<?php

namespace Sunaoka\Aws\Structures\Sqs\AddPermission;

trait AddPermissionTrait
{
    /**
     * @param AddPermissionRequest $args
     * @return void
     */
    public function addPermission(AddPermissionRequest $args)
    {
        parent::addPermission($args->toArray());
    }
}
