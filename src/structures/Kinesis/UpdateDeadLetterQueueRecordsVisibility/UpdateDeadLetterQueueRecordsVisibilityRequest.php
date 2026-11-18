<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateDeadLetterQueueRecordsVisibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueARN
 * @property list<Shapes\UpdateDeadLetterQueueRecordsVisibilityRequestEntry> $Entries
 */
class UpdateDeadLetterQueueRecordsVisibilityRequest extends Request
{
    /**
     * @param array{
     *     QueueARN: string,
     *     Entries: list<Shapes\UpdateDeadLetterQueueRecordsVisibilityRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
