<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListS3TableIntegrations;

trait ListS3TableIntegrationsTrait
{
    /**
     * @param ListS3TableIntegrationsRequest $args
     * @return ListS3TableIntegrationsResponse
     */
    public function listS3TableIntegrations(ListS3TableIntegrationsRequest $args)
    {
        $result = parent::listS3TableIntegrations($args->toArray());
        return new ListS3TableIntegrationsResponse($result->toArray());
    }
}
