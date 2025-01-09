<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RollbackOperationId
 * @property ErrorInfo $ErrorInfo
 */
class OperationFailureDetails extends Shape
{
    /**
     * @param array{
     *     RollbackOperationId?: string,
     *     ErrorInfo?: ErrorInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
