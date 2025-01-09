<?php

namespace Sunaoka\Aws\Structures\Sqs\TagQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property array<string, string> $Tags
 */
class TagQueueRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
