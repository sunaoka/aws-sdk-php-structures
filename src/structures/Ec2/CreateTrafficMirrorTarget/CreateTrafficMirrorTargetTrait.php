<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorTarget;

trait CreateTrafficMirrorTargetTrait
{
    /**
     * @param CreateTrafficMirrorTargetRequest $args
     * @return CreateTrafficMirrorTargetResponse
     */
    public function createTrafficMirrorTarget(CreateTrafficMirrorTargetRequest $args)
    {
        $result = parent::createTrafficMirrorTarget($args->toArray());
        return new CreateTrafficMirrorTargetResponse($result->toArray());
    }
}
