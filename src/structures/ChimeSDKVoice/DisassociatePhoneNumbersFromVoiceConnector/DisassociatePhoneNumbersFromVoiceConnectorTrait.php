<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DisassociatePhoneNumbersFromVoiceConnector;

trait DisassociatePhoneNumbersFromVoiceConnectorTrait
{
    /**
     * @param DisassociatePhoneNumbersFromVoiceConnectorRequest $args
     * @return DisassociatePhoneNumbersFromVoiceConnectorResponse
     */
    public function disassociatePhoneNumbersFromVoiceConnector(DisassociatePhoneNumbersFromVoiceConnectorRequest $args)
    {
        $result = parent::disassociatePhoneNumbersFromVoiceConnector($args->toArray());
        return new DisassociatePhoneNumbersFromVoiceConnectorResponse($result->toArray());
    }
}
