<?php

namespace Sunaoka\Aws\Structures\Kinesis\AcknowledgeDeadLetterQueueRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueARN
 * @property list<Shapes\AcknowledgeDeadLetterQueueRecordsRequestEntry> $Entries
 */
class AcknowledgeDeadLetterQueueRecordsRequest extends Request
{
    /**
     * @param array{
     *     QueueARN: string,
     *     Entries: list<Shapes\AcknowledgeDeadLetterQueueRecordsRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
