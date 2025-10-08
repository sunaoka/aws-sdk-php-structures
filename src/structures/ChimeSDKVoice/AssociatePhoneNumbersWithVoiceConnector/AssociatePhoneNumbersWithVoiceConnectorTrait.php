<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\AssociatePhoneNumbersWithVoiceConnector;

trait AssociatePhoneNumbersWithVoiceConnectorTrait
{
    /**
     * @param AssociatePhoneNumbersWithVoiceConnectorRequest $args
     * @return AssociatePhoneNumbersWithVoiceConnectorResponse
     */
    public function associatePhoneNumbersWithVoiceConnector(AssociatePhoneNumbersWithVoiceConnectorRequest $args)
    {
        $result = parent::associatePhoneNumbersWithVoiceConnector($args->toArray());
        return new AssociatePhoneNumbersWithVoiceConnectorResponse($result->toArray());
    }
}
