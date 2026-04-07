<?php

namespace Sunaoka\Aws\Structures\S3Files\UpdateMountTarget;

trait UpdateMountTargetTrait
{
    /**
     * @param UpdateMountTargetRequest $args
     * @return UpdateMountTargetResponse
     */
    public function updateMountTarget(UpdateMountTargetRequest $args)
    {
        $result = parent::updateMountTarget($args->toArray());
        return new UpdateMountTargetResponse($result->toArray());
    }
}
