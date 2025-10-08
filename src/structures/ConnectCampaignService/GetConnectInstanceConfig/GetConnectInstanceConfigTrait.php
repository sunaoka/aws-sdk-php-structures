<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetConnectInstanceConfig;

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
