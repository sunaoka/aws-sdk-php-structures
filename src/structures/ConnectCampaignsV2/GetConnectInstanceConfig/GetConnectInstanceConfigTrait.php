<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\GetConnectInstanceConfig;

trait GetConnectInstanceConfigTrait
{
    /**
     * @param GetConnectInstanceConfigRequest $args
     * @return GetConnectInstanceConfigResponse
     */
    public function getConnectInstanceConfig(GetConnectInstanceConfigRequest $args)
    {
        $result = parent::getConnectInstanceConfig($args->toArray());
        return new GetConnectInstanceConfigResponse($result->toArray());
    }
}
