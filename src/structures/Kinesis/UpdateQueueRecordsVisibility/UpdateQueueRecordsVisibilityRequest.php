<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateQueueRecordsVisibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueARN
 * @property list<Shapes\UpdateQueueRecordsVisibilityRequestEntry> $Entries
 */
class UpdateQueueRecordsVisibilityRequest extends Request
{
    /**
     * @param array{
     *     QueueARN: string,
     *     Entries: list<Shapes\UpdateQueueRecordsVisibilityRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
