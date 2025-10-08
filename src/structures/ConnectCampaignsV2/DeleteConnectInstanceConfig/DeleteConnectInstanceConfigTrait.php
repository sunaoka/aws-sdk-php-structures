<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteConnectInstanceConfig;

trait DeleteConnectInstanceConfigTrait
{
    /**
     * @param DeleteConnectInstanceConfigRequest $args
     * @return void
     */
    public function deleteConnectInstanceConfig(DeleteConnectInstanceConfigRequest $args)
    {
        parent::deleteConnectInstanceConfig($args->toArray());
    }
}
