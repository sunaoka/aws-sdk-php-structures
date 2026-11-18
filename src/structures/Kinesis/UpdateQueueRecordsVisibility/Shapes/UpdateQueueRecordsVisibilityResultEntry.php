<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateQueueRecordsVisibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReceiptHandle
 */
class UpdateQueueRecordsVisibilityResultEntry extends Shape
{
    /**
     * @param array{ReceiptHandle: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
