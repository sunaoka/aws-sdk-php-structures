<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateS3TableIntegration;

trait CreateS3TableIntegrationTrait
{
    /**
     * @param CreateS3TableIntegrationRequest $args
     * @return CreateS3TableIntegrationResponse
     */
    public function createS3TableIntegration(CreateS3TableIntegrationRequest $args)
    {
        $result = parent::createS3TableIntegration($args->toArray());
        return new CreateS3TableIntegrationResponse($result->toArray());
    }
}
