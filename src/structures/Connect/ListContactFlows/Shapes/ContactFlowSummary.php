<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER' $ContactFlowType
 * @property 'ACTIVE'|'ARCHIVED' $ContactFlowState
 * @property 'PUBLISHED'|'SAVED' $ContactFlowStatus
 */
class ContactFlowSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     ContactFlowType?: 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER',
     *     ContactFlowState?: 'ACTIVE'|'ARCHIVED',
     *     ContactFlowStatus?: 'PUBLISHED'|'SAVED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
