<?php

namespace Sunaoka\Aws\Structures\Sqs\DeleteMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property string $ReceiptHandle
 */
class DeleteMessageRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     ReceiptHandle: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
