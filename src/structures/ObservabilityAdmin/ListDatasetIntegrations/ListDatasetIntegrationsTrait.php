<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListDatasetIntegrations;

trait ListDatasetIntegrationsTrait
{
    /**
     * @param ListDatasetIntegrationsRequest $args
     * @return ListDatasetIntegrationsResponse
     */
    public function listDatasetIntegrations(ListDatasetIntegrationsRequest $args)
    {
        $result = parent::listDatasetIntegrations($args->toArray());
        return new ListDatasetIntegrationsResponse($result->toArray());
    }
}
