<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutConnectInstanceIntegration;

trait PutConnectInstanceIntegrationTrait
{
    /**
     * @param PutConnectInstanceIntegrationRequest $args
     * @return void
     */
    public function putConnectInstanceIntegration(PutConnectInstanceIntegrationRequest $args)
    {
        parent::putConnectInstanceIntegration($args->toArray());
    }
}
