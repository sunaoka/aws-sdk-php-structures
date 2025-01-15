<?php

namespace Sunaoka\Aws\Structures\Connect\BatchGetFlowAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property string|null $FlowId
 * @property 'WHATSAPP_MESSAGING_PHONE_NUMBER'|'VOICE_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR'|null $ResourceType
 */
class FlowAssociationSummary extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     FlowId?: string|null,
     *     ResourceType?: 'WHATSAPP_MESSAGING_PHONE_NUMBER'|'VOICE_PHONE_NUMBER'|'INBOUND_EMAIL'|'OUTBOUND_EMAIL'|'ANALYTICS_CONNECTOR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
