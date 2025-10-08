<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopMlflowTrackingServer;

trait StopMlflowTrackingServerTrait
{
    /**
     * @param StopMlflowTrackingServerRequest $args
     * @return StopMlflowTrackingServerResponse
     */
    public function stopMlflowTrackingServer(StopMlflowTrackingServerRequest $args)
    {
        $result = parent::stopMlflowTrackingServer($args->toArray());
        return new StopMlflowTrackingServerResponse($result->toArray());
    }
}
