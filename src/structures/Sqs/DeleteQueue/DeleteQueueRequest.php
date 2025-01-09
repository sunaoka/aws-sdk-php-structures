<?php

namespace Sunaoka\Aws\Structures\Sqs\DeleteQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 */
class DeleteQueueRequest extends Request
{
    /**
     * @param array{QueueUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
