<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListVoiceConnectorTerminationCredentials;

trait ListVoiceConnectorTerminationCredentialsTrait
{
    /**
     * @param ListVoiceConnectorTerminationCredentialsRequest $args
     * @return ListVoiceConnectorTerminationCredentialsResponse
     */
    public function listVoiceConnectorTerminationCredentials(ListVoiceConnectorTerminationCredentialsRequest $args)
    {
        $result = parent::listVoiceConnectorTerminationCredentials($args->toArray());
        return new ListVoiceConnectorTerminationCredentialsResponse($result->toArray());
    }
}
