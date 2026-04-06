<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'|null $ContactFlowType
 * @property 'ACTIVE'|'ARCHIVED'|null $ContactFlowState
 * @property 'PUBLISHED'|'SAVED'|null $ContactFlowStatus
 */
class ContactFlowSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     ContactFlowType?: 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'|null,
     *     ContactFlowState?: 'ACTIVE'|'ARCHIVED'|null,
     *     ContactFlowStatus?: 'PUBLISHED'|'SAVED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
