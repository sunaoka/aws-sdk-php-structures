<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteConnectInstanceIntegration;

trait DeleteConnectInstanceIntegrationTrait
{
    /**
     * @param DeleteConnectInstanceIntegrationRequest $args
     * @return void
     */
    public function deleteConnectInstanceIntegration(DeleteConnectInstanceIntegrationRequest $args)
    {
        parent::deleteConnectInstanceIntegration($args->toArray());
    }
}
