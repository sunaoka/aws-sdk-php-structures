<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteStorageLensGroup;

trait DeleteStorageLensGroupTrait
{
    /**
     * @param DeleteStorageLensGroupRequest $args
     * @return void
     */
    public function deleteStorageLensGroup(DeleteStorageLensGroupRequest $args)
    {
        parent::deleteStorageLensGroup($args->toArray());
    }
}
