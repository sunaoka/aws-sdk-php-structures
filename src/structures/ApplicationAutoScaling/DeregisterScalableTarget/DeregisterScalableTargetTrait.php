<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DeregisterScalableTarget;

trait DeregisterScalableTargetTrait
{
    /**
     * @param DeregisterScalableTargetRequest $args
     * @return DeregisterScalableTargetResponse
     */
    public function deregisterScalableTarget(DeregisterScalableTargetRequest $args)
    {
        $result = parent::deregisterScalableTarget($args->toArray());
        return new DeregisterScalableTargetResponse($result->toArray());
    }
}
