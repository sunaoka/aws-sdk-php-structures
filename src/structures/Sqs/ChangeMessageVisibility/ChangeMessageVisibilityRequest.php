<?php

namespace Sunaoka\Aws\Structures\Sqs\ChangeMessageVisibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property string $ReceiptHandle
 * @property int $VisibilityTimeout
 */
class ChangeMessageVisibilityRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     ReceiptHandle: string,
     *     VisibilityTimeout: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
