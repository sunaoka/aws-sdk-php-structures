<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePresignedMlflowTrackingServerUrl;

trait CreatePresignedMlflowTrackingServerUrlTrait
{
    /**
     * @param CreatePresignedMlflowTrackingServerUrlRequest $args
     * @return CreatePresignedMlflowTrackingServerUrlResponse
     */
    public function createPresignedMlflowTrackingServerUrl(CreatePresignedMlflowTrackingServerUrlRequest $args)
    {
        $result = parent::createPresignedMlflowTrackingServerUrl($args->toArray());
        return new CreatePresignedMlflowTrackingServerUrlResponse($result->toArray());
    }
}
