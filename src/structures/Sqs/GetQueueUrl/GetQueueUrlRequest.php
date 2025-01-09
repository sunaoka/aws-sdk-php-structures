<?php

namespace Sunaoka\Aws\Structures\Sqs\GetQueueUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueName
 * @property string $QueueOwnerAWSAccountId
 */
class GetQueueUrlRequest extends Request
{
    /**
     * @param array{
     *     QueueName: string,
     *     QueueOwnerAWSAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
