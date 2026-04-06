<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteMlflowTrackingServer;

trait DeleteMlflowTrackingServerTrait
{
    /**
     * @param DeleteMlflowTrackingServerRequest $args
     * @return DeleteMlflowTrackingServerResponse
     */
    public function deleteMlflowTrackingServer(DeleteMlflowTrackingServerRequest $args)
    {
        $result = parent::deleteMlflowTrackingServer($args->toArray());
        return new DeleteMlflowTrackingServerResponse($result->toArray());
    }
}
