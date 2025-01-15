<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContactFlowSearchCriteria>|null $OrConditions
 * @property list<ContactFlowSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 * @property 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'|null $TypeCondition
 * @property 'ACTIVE'|'ARCHIVED'|null $StateCondition
 * @property 'PUBLISHED'|'SAVED'|null $StatusCondition
 */
class ContactFlowSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<ContactFlowSearchCriteria>|null,
     *     AndConditions?: list<ContactFlowSearchCriteria>|null,
     *     StringCondition?: StringCondition|null,
     *     TypeCondition?: 'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'|null,
     *     StateCondition?: 'ACTIVE'|'ARCHIVED'|null,
     *     StatusCondition?: 'PUBLISHED'|'SAVED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
