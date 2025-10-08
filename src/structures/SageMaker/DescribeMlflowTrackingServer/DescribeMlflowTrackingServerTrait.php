<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMlflowTrackingServer;

trait DescribeMlflowTrackingServerTrait
{
    /**
     * @param DescribeMlflowTrackingServerRequest $args
     * @return DescribeMlflowTrackingServerResponse
     */
    public function describeMlflowTrackingServer(DescribeMlflowTrackingServerRequest $args)
    {
        $result = parent::describeMlflowTrackingServer($args->toArray());
        return new DescribeMlflowTrackingServerResponse($result->toArray());
    }
}
