<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorTerminationCredentials;

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
