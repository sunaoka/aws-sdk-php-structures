<?php

namespace Sunaoka\Aws\Structures\S3Files\DeleteMountTarget;

trait DeleteMountTargetTrait
{
    /**
     * @param DeleteMountTargetRequest $args
     * @return void
     */
    public function deleteMountTarget(DeleteMountTargetRequest $args)
    {
        parent::deleteMountTarget($args->toArray());
    }
}
