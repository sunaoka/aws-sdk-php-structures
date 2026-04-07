<?php

namespace Sunaoka\Aws\Structures\S3Files\CreateMountTarget;

trait CreateMountTargetTrait
{
    /**
     * @param CreateMountTargetRequest $args
     * @return CreateMountTargetResponse
     */
    public function createMountTarget(CreateMountTargetRequest $args)
    {
        $result = parent::createMountTarget($args->toArray());
        return new CreateMountTargetResponse($result->toArray());
    }
}
