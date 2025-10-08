<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListVoiceConnectorGroups;

trait ListVoiceConnectorGroupsTrait
{
    /**
     * @param ListVoiceConnectorGroupsRequest $args
     * @return ListVoiceConnectorGroupsResponse
     */
    public function listVoiceConnectorGroups(ListVoiceConnectorGroupsRequest $args)
    {
        $result = parent::listVoiceConnectorGroups($args->toArray());
        return new ListVoiceConnectorGroupsResponse($result->toArray());
    }
}
