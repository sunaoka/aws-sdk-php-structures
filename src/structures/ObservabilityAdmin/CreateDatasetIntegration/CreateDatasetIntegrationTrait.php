<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateDatasetIntegration;

trait CreateDatasetIntegrationTrait
{
    /**
     * @param CreateDatasetIntegrationRequest $args
     * @return CreateDatasetIntegrationResponse
     */
    public function createDatasetIntegration(CreateDatasetIntegrationRequest $args)
    {
        $result = parent::createDatasetIntegration($args->toArray());
        return new CreateDatasetIntegrationResponse($result->toArray());
    }
}
