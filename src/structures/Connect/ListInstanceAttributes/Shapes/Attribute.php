<?php

namespace Sunaoka\Aws\Structures\Connect\ListInstanceAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INBOUND_CALLS'|'OUTBOUND_CALLS'|'CONTACTFLOW_LOGS'|'CONTACT_LENS'|'AUTO_RESOLVE_BEST_VOICES'|'USE_CUSTOM_TTS_VOICES'|'EARLY_MEDIA'|'MULTI_PARTY_CONFERENCE'|'HIGH_VOLUME_OUTBOUND'|'ENHANCED_CONTACT_MONITORING'|'ENHANCED_CHAT_MONITORING'|'MULTI_PARTY_CHAT_CONFERENCE'|null $AttributeType
 * @property string|null $Value
 */
class Attribute extends Shape
{
    /**
     * @param array{
     *     AttributeType?: 'INBOUND_CALLS'|'OUTBOUND_CALLS'|'CONTACTFLOW_LOGS'|'CONTACT_LENS'|'AUTO_RESOLVE_BEST_VOICES'|'USE_CUSTOM_TTS_VOICES'|'EARLY_MEDIA'|'MULTI_PARTY_CONFERENCE'|'HIGH_VOLUME_OUTBOUND'|'ENHANCED_CONTACT_MONITORING'|'ENHANCED_CHAT_MONITORING'|'MULTI_PARTY_CHAT_CONFERENCE'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
