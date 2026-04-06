<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RollbackOperationId
 * @property ErrorInfo|null $ErrorInfo
 */
class OperationFailureDetails extends Shape
{
    /**
     * @param array{
     *     RollbackOperationId?: string|null,
     *     ErrorInfo?: ErrorInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
