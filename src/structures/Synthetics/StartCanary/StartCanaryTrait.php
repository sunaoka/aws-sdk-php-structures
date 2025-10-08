<?php

namespace Sunaoka\Aws\Structures\Synthetics\StartCanary;

trait StartCanaryTrait
{
    /**
     * @param StartCanaryRequest $args
     * @return StartCanaryResponse
     */
    public function startCanary(StartCanaryRequest $args)
    {
        $result = parent::startCanary($args->toArray());
        return new StartCanaryResponse($result->toArray());
    }
}
