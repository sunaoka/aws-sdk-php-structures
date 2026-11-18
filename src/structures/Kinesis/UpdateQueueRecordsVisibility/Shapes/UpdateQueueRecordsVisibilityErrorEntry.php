<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateQueueRecordsVisibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReceiptHandle
 * @property string $ErrorCode
 * @property string|null $ErrorMessage
 */
class UpdateQueueRecordsVisibilityErrorEntry extends Shape
{
    /**
     * @param array{
     *     ReceiptHandle: string,
     *     ErrorCode: string,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
