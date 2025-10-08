<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateStorageLensGroup;

trait CreateStorageLensGroupTrait
{
    /**
     * @param CreateStorageLensGroupRequest $args
     * @return void
     */
    public function createStorageLensGroup(CreateStorageLensGroupRequest $args)
    {
        parent::createStorageLensGroup($args->toArray());
    }
}
