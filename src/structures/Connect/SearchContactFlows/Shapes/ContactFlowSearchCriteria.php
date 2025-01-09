<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContactFlowSearchCriteria> $OrConditions
 * @property list<ContactFlowSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 * @property 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER' $TypeCondition
 * @property 'ACTIVE'|'ARCHIVED' $StateCondition
 * @property 'PUBLISHED'|'SAVED' $StatusCondition
 */
class ContactFlowSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<ContactFlowSearchCriteria>,
     *     AndConditions?: list<ContactFlowSearchCriteria>,
     *     StringCondition?: StringCondition,
     *     TypeCondition?: 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER',
     *     StateCondition?: 'ACTIVE'|'ARCHIVED',
     *     StatusCondition?: 'PUBLISHED'|'SAVED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
