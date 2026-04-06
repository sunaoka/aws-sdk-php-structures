<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateMlflowTrackingServer;

trait CreateMlflowTrackingServerTrait
{
    /**
     * @param CreateMlflowTrackingServerRequest $args
     * @return CreateMlflowTrackingServerResponse
     */
    public function createMlflowTrackingServer(CreateMlflowTrackingServerRequest $args)
    {
        $result = parent::createMlflowTrackingServer($args->toArray());
        return new CreateMlflowTrackingServerResponse($result->toArray());
    }
}
