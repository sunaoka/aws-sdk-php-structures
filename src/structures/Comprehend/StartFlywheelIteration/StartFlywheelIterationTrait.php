<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartFlywheelIteration;

trait StartFlywheelIterationTrait
{
    /**
     * @param StartFlywheelIterationRequest $args
     * @return StartFlywheelIterationResponse
     */
    public function startFlywheelIteration(StartFlywheelIterationRequest $args)
    {
        $result = parent::startFlywheelIteration($args->toArray());
        return new StartFlywheelIterationResponse($result->toArray());
    }
}
