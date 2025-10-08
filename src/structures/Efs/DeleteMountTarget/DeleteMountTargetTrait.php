<?php

namespace Sunaoka\Aws\Structures\Efs\DeleteMountTarget;

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
