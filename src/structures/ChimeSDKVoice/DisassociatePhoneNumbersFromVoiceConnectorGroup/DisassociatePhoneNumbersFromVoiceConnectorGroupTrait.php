<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DisassociatePhoneNumbersFromVoiceConnectorGroup;

trait DisassociatePhoneNumbersFromVoiceConnectorGroupTrait
{
    /**
     * @param DisassociatePhoneNumbersFromVoiceConnectorGroupRequest $args
     * @return DisassociatePhoneNumbersFromVoiceConnectorGroupResponse
     */
    public function disassociatePhoneNumbersFromVoiceConnectorGroup(
        DisassociatePhoneNumbersFromVoiceConnectorGroupRequest $args,
    ) {
        $result = parent::disassociatePhoneNumbersFromVoiceConnectorGroup($args->toArray());
        return new DisassociatePhoneNumbersFromVoiceConnectorGroupResponse($result->toArray());
    }
}
