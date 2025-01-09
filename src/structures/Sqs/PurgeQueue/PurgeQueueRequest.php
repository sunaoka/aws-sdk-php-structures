<?php

namespace Sunaoka\Aws\Structures\Sqs\PurgeQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 */
class PurgeQueueRequest extends Request
{
    /**
     * @param array{QueueUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
