<?php

namespace Sunaoka\Aws\Structures\KinesisVideoSignalingChannels\GetIceServerConfig;

trait GetIceServerConfigTrait
{
    /**
     * @param GetIceServerConfigRequest $args
     * @return GetIceServerConfigResponse
     */
    public function getIceServerConfig(GetIceServerConfigRequest $args)
    {
        $result = parent::getIceServerConfig($args->toArray());
        return new GetIceServerConfigResponse($result->toArray());
    }
}
