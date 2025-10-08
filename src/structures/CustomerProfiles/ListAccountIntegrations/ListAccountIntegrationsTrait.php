<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListAccountIntegrations;

trait ListAccountIntegrationsTrait
{
    /**
     * @param ListAccountIntegrationsRequest $args
     * @return ListAccountIntegrationsResponse
     */
    public function listAccountIntegrations(ListAccountIntegrationsRequest $args)
    {
        $result = parent::listAccountIntegrations($args->toArray());
        return new ListAccountIntegrationsResponse($result->toArray());
    }
}
