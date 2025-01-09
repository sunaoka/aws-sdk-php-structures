<?php

namespace Sunaoka\Aws\Structures\Sqs\UntagQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property list<string> $TagKeys
 */
class UntagQueueRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
