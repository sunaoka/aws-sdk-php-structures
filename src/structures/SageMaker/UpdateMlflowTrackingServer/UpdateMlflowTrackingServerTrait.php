<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMlflowTrackingServer;

trait UpdateMlflowTrackingServerTrait
{
    /**
     * @param UpdateMlflowTrackingServerRequest $args
     * @return UpdateMlflowTrackingServerResponse
     */
    public function updateMlflowTrackingServer(UpdateMlflowTrackingServerRequest $args)
    {
        $result = parent::updateMlflowTrackingServer($args->toArray());
        return new UpdateMlflowTrackingServerResponse($result->toArray());
    }
}
