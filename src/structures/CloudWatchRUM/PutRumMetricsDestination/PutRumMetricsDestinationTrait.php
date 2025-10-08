<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\PutRumMetricsDestination;

trait PutRumMetricsDestinationTrait
{
    /**
     * @param PutRumMetricsDestinationRequest $args
     * @return PutRumMetricsDestinationResponse
     */
    public function putRumMetricsDestination(PutRumMetricsDestinationRequest $args)
    {
        $result = parent::putRumMetricsDestination($args->toArray());
        return new PutRumMetricsDestinationResponse($result->toArray());
    }
}
