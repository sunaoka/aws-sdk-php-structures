<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListVoiceConnectors;

trait ListVoiceConnectorsTrait
{
    /**
     * @param ListVoiceConnectorsRequest $args
     * @return ListVoiceConnectorsResponse
     */
    public function listVoiceConnectors(ListVoiceConnectorsRequest $args)
    {
        $result = parent::listVoiceConnectors($args->toArray());
        return new ListVoiceConnectorsResponse($result->toArray());
    }
}
