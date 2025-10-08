<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListAvailableVoiceConnectorRegions;

trait ListAvailableVoiceConnectorRegionsTrait
{
    /**
     * @return ListAvailableVoiceConnectorRegionsResponse
     */
    public function listAvailableVoiceConnectorRegions()
    {
        $result = parent::listAvailableVoiceConnectorRegions();
        return new ListAvailableVoiceConnectorRegionsResponse($result->toArray());
    }
}
