<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorTerminationCredentials;

trait PutVoiceConnectorTerminationCredentialsTrait
{
    /**
     * @param PutVoiceConnectorTerminationCredentialsRequest $args
     * @return void
     */
    public function putVoiceConnectorTerminationCredentials(PutVoiceConnectorTerminationCredentialsRequest $args)
    {
        parent::putVoiceConnectorTerminationCredentials($args->toArray());
    }
}
