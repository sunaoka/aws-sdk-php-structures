<?php

namespace Sunaoka\Aws\Structures\Efs\CreateMountTarget;

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
