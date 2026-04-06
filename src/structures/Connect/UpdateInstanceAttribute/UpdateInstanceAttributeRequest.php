<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateInstanceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'INBOUND_CALLS'|'OUTBOUND_CALLS'|'CONTACTFLOW_LOGS'|'CONTACT_LENS'|'AUTO_RESOLVE_BEST_VOICES'|'USE_CUSTOM_TTS_VOICES'|'EARLY_MEDIA'|'MULTI_PARTY_CONFERENCE'|'HIGH_VOLUME_OUTBOUND'|'ENHANCED_CONTACT_MONITORING'|'ENHANCED_CHAT_MONITORING'|'MULTI_PARTY_CHAT_CONFERENCE' $AttributeType
 * @property string $Value
 */
class UpdateInstanceAttributeRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AttributeType: 'INBOUND_CALLS'|'OUTBOUND_CALLS'|'CONTACTFLOW_LOGS'|'CONTACT_LENS'|'AUTO_RESOLVE_BEST_VOICES'|'USE_CUSTOM_TTS_VOICES'|'EARLY_MEDIA'|'MULTI_PARTY_CONFERENCE'|'HIGH_VOLUME_OUTBOUND'|'ENHANCED_CONTACT_MONITORING'|'ENHANCED_CHAT_MONITORING'|'MULTI_PARTY_CHAT_CONFERENCE',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
