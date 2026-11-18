<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeleteQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueARN
 */
class DeleteQueueRequest extends Request
{
    /**
     * @param array{QueueARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
