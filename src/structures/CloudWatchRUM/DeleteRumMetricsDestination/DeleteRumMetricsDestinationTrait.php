<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\DeleteRumMetricsDestination;

trait DeleteRumMetricsDestinationTrait
{
    /**
     * @param DeleteRumMetricsDestinationRequest $args
     * @return DeleteRumMetricsDestinationResponse
     */
    public function deleteRumMetricsDestination(DeleteRumMetricsDestinationRequest $args)
    {
        $result = parent::deleteRumMetricsDestination($args->toArray());
        return new DeleteRumMetricsDestinationResponse($result->toArray());
    }
}
