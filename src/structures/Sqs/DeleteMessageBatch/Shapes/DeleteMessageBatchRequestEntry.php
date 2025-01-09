<?php

namespace Sunaoka\Aws\Structures\Sqs\DeleteMessageBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ReceiptHandle
 */
class DeleteMessageBatchRequestEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ReceiptHandle: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
