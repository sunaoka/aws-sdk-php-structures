<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateDatasetIntegration;

trait UpdateDatasetIntegrationTrait
{
    /**
     * @param UpdateDatasetIntegrationRequest $args
     * @return UpdateDatasetIntegrationResponse
     */
    public function updateDatasetIntegration(UpdateDatasetIntegrationRequest $args)
    {
        $result = parent::updateDatasetIntegration($args->toArray());
        return new UpdateDatasetIntegrationResponse($result->toArray());
    }
}
