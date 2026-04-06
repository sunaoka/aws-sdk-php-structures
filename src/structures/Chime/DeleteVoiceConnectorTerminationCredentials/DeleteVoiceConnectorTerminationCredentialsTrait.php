<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteVoiceConnectorTerminationCredentials;

trait DeleteVoiceConnectorTerminationCredentialsTrait
{
    /**
     * @param DeleteVoiceConnectorTerminationCredentialsRequest $args
     * @return void
     */
    public function deleteVoiceConnectorTerminationCredentials(DeleteVoiceConnectorTerminationCredentialsRequest $args)
    {
        parent::deleteVoiceConnectorTerminationCredentials($args->toArray());
    }
}
