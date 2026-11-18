<?php

namespace Sunaoka\Aws\Structures\Kinesis\RestoreDeadLetterQueueRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueARN
 * @property list<Shapes\RestoreDeadLetterQueueRecordsRequestEntry> $Entries
 */
class RestoreDeadLetterQueueRecordsRequest extends Request
{
    /**
     * @param array{
     *     QueueARN: string,
     *     Entries: list<Shapes\RestoreDeadLetterQueueRecordsRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
