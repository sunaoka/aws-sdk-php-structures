<?php

namespace Sunaoka\Aws\Structures\S3Files\GetMountTarget;

trait GetMountTargetTrait
{
    /**
     * @param GetMountTargetRequest $args
     * @return GetMountTargetResponse
     */
    public function getMountTarget(GetMountTargetRequest $args)
    {
        $result = parent::getMountTarget($args->toArray());
        return new GetMountTargetResponse($result->toArray());
    }
}
