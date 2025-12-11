<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'|'CAMPAIGN'|null $ContactFlowType
 */
class ContactFlowTypeCondition extends Shape
{
    /**
     * @param array{ContactFlowType?: 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'|'CAMPAIGN'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
