<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIATION_TIMESTAMP'|'SCHEDULED_TIMESTAMP'|'CONNECTED_TO_AGENT_TIMESTAMP'|'DISCONNECT_TIMESTAMP' $Type
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class SearchContactsTimeRange extends Shape
{
    /**
     * @param array{
     *     Type: 'INITIATION_TIMESTAMP'|'SCHEDULED_TIMESTAMP'|'CONNECTED_TO_AGENT_TIMESTAMP'|'DISCONNECT_TIMESTAMP',
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
