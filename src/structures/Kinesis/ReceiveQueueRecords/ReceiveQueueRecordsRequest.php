<?php

namespace Sunaoka\Aws\Structures\Kinesis\ReceiveQueueRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueARN
 * @property int<1, 10>|null $Limit
 * @property int<1, 20>|null $WaitTimeSeconds
 * @property int<0, 43200>|null $VisibilityTimeoutSeconds
 */
class ReceiveQueueRecordsRequest extends Request
{
    /**
     * @param array{
     *     QueueARN: string,
     *     Limit?: int<1, 10>|null,
     *     WaitTimeSeconds?: int<1, 20>|null,
     *     VisibilityTimeoutSeconds?: int<0, 43200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
