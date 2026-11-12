<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshotOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SnapshotErrorInfo|null $ErrorInfo
 */
class SnapshotOperationFailureDetails extends Shape
{
    /**
     * @param array{ErrorInfo?: SnapshotErrorInfo|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
