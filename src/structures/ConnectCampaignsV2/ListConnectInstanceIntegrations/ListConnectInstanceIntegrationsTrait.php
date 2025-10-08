<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ListConnectInstanceIntegrations;

trait ListConnectInstanceIntegrationsTrait
{
    /**
     * @param ListConnectInstanceIntegrationsRequest $args
     * @return ListConnectInstanceIntegrationsResponse
     */
    public function listConnectInstanceIntegrations(ListConnectInstanceIntegrationsRequest $args)
    {
        $result = parent::listConnectInstanceIntegrations($args->toArray());
        return new ListConnectInstanceIntegrationsResponse($result->toArray());
    }
}
