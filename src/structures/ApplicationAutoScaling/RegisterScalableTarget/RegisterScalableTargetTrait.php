<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\RegisterScalableTarget;

trait RegisterScalableTargetTrait
{
    /**
     * @param RegisterScalableTargetRequest $args
     * @return RegisterScalableTargetResponse
     */
    public function registerScalableTarget(RegisterScalableTargetRequest $args)
    {
        $result = parent::registerScalableTarget($args->toArray());
        return new RegisterScalableTargetResponse($result->toArray());
    }
}
