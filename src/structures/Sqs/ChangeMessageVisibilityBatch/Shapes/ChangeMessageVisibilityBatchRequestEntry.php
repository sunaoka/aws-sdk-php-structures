<?php

namespace Sunaoka\Aws\Structures\Sqs\ChangeMessageVisibilityBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ReceiptHandle
 * @property int|null $VisibilityTimeout
 */
class ChangeMessageVisibilityBatchRequestEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ReceiptHandle: string,
     *     VisibilityTimeout?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
