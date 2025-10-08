<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateStorageLensGroup;

trait UpdateStorageLensGroupTrait
{
    /**
     * @param UpdateStorageLensGroupRequest $args
     * @return void
     */
    public function updateStorageLensGroup(UpdateStorageLensGroupRequest $args)
    {
        parent::updateStorageLensGroup($args->toArray());
    }
}
