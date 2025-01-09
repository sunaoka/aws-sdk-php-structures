<?php

namespace Sunaoka\Aws\Structures\Connect\BatchGetFlowAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property string $FlowId
 * @property 'WHATSAPP_MESSAGING_PHONE_NUMBER'|'VOICE_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR' $ResourceType
 */
class FlowAssociationSummary extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string,
     *     FlowId?: string,
     *     ResourceType?: 'WHATSAPP_MESSAGING_PHONE_NUMBER'|'VOICE_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
