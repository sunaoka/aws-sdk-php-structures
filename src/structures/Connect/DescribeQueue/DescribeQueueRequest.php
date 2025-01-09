<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QueueId
 */
class DescribeQueueRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
