<?php

namespace Sunaoka\Aws\Structures\Kinesis\AcknowledgeQueueRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueARN
 * @property list<Shapes\AcknowledgeQueueRecordsRequestEntry> $Entries
 */
class AcknowledgeQueueRecordsRequest extends Request
{
    /**
     * @param array{
     *     QueueARN: string,
     *     Entries: list<Shapes\AcknowledgeQueueRecordsRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
