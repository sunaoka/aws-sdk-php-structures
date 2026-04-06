<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIATION_TIMESTAMP'|'SCHEDULED_TIMESTAMP'|'CONNECTED_TO_AGENT_TIMESTAMP'|'DISCONNECT_TIMESTAMP'|'ENQUEUE_TIMESTAMP' $Type
 * @property 'NOT_EXISTS' $ConditionType
 */
class SearchContactsTimestampCondition extends Shape
{
    /**
     * @param array{
     *     Type: 'INITIATION_TIMESTAMP'|'SCHEDULED_TIMESTAMP'|'CONNECTED_TO_AGENT_TIMESTAMP'|'DISCONNECT_TIMESTAMP'|'ENQUEUE_TIMESTAMP',
     *     ConditionType: 'NOT_EXISTS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
