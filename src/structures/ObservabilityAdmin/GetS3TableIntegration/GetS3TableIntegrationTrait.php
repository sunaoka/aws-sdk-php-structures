<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetS3TableIntegration;

trait GetS3TableIntegrationTrait
{
    /**
     * @param GetS3TableIntegrationRequest $args
     * @return GetS3TableIntegrationResponse
     */
    public function getS3TableIntegration(GetS3TableIntegrationRequest $args)
    {
        $result = parent::getS3TableIntegration($args->toArray());
        return new GetS3TableIntegrationResponse($result->toArray());
    }
}
