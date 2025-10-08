<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceConnectorTerminationCredentials;

trait DeleteVoiceConnectorTerminationCredentialsTrait
{
    /**
     * @param DeleteVoiceConnectorTerminationCredentialsRequest $args
     * @return void
     */
    public function deleteVoiceConnectorTerminationCredentials(
        DeleteVoiceConnectorTerminationCredentialsRequest $args,
    ) {
        parent::deleteVoiceConnectorTerminationCredentials($args->toArray());
    }
}
