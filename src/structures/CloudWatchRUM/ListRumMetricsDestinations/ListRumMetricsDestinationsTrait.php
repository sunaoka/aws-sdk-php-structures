<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\ListRumMetricsDestinations;

trait ListRumMetricsDestinationsTrait
{
    /**
     * @param ListRumMetricsDestinationsRequest $args
     * @return ListRumMetricsDestinationsResponse
     */
    public function listRumMetricsDestinations(ListRumMetricsDestinationsRequest $args)
    {
        $result = parent::listRumMetricsDestinations($args->toArray());
        return new ListRumMetricsDestinationsResponse($result->toArray());
    }
}
