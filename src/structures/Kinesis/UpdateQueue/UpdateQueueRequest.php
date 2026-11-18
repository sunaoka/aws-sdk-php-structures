<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueARN
 * @property Shapes\QueueAttributes $QueueAttributes
 */
class UpdateQueueRequest extends Request
{
    /**
     * @param array{
     *     QueueARN: string,
     *     QueueAttributes: Shapes\QueueAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
