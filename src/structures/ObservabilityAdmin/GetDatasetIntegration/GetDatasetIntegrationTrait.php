<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetDatasetIntegration;

trait GetDatasetIntegrationTrait
{
    /**
     * @param GetDatasetIntegrationRequest $args
     * @return GetDatasetIntegrationResponse
     */
    public function getDatasetIntegration(GetDatasetIntegrationRequest $args)
    {
        $result = parent::getDatasetIntegration($args->toArray());
        return new GetDatasetIntegrationResponse($result->toArray());
    }
}
