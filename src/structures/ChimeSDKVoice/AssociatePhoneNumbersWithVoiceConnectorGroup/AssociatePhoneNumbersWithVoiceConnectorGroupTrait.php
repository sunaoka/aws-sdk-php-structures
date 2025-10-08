<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\AssociatePhoneNumbersWithVoiceConnectorGroup;

trait AssociatePhoneNumbersWithVoiceConnectorGroupTrait
{
    /**
     * @param AssociatePhoneNumbersWithVoiceConnectorGroupRequest $args
     * @return AssociatePhoneNumbersWithVoiceConnectorGroupResponse
     */
    public function associatePhoneNumbersWithVoiceConnectorGroup(
        AssociatePhoneNumbersWithVoiceConnectorGroupRequest $args,
    ) {
        $result = parent::associatePhoneNumbersWithVoiceConnectorGroup($args->toArray());
        return new AssociatePhoneNumbersWithVoiceConnectorGroupResponse($result->toArray());
    }
}
