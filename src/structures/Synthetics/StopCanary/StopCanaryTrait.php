<?php

namespace Sunaoka\Aws\Structures\Synthetics\StopCanary;

trait StopCanaryTrait
{
    /**
     * @param StopCanaryRequest $args
     * @return StopCanaryResponse
     */
    public function stopCanary(StopCanaryRequest $args)
    {
        $result = parent::stopCanary($args->toArray());
        return new StopCanaryResponse($result->toArray());
    }
}
