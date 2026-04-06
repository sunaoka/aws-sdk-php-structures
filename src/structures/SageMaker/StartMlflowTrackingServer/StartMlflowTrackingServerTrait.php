<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartMlflowTrackingServer;

trait StartMlflowTrackingServerTrait
{
    /**
     * @param StartMlflowTrackingServerRequest $args
     * @return StartMlflowTrackingServerResponse
     */
    public function startMlflowTrackingServer(StartMlflowTrackingServerRequest $args)
    {
        $result = parent::startMlflowTrackingServer($args->toArray());
        return new StartMlflowTrackingServerResponse($result->toArray());
    }
}
