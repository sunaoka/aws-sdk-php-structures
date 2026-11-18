<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateDeadLetterQueueRecordsVisibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReceiptHandle
 * @property int<0, 43200> $VisibilityTimeoutSeconds
 */
class UpdateDeadLetterQueueRecordsVisibilityRequestEntry extends Shape
{
    /**
     * @param array{
     *     ReceiptHandle: string,
     *     VisibilityTimeoutSeconds: int<0, 43200>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
