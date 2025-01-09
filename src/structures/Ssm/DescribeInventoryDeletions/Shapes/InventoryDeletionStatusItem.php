<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInventoryDeletions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeletionId
 * @property string $TypeName
 * @property \Aws\Api\DateTimeResult $DeletionStartTime
 * @property 'InProgress'|'Complete' $LastStatus
 * @property string $LastStatusMessage
 * @property InventoryDeletionSummary $DeletionSummary
 * @property \Aws\Api\DateTimeResult $LastStatusUpdateTime
 */
class InventoryDeletionStatusItem extends Shape
{
    /**
     * @param array{
     *     DeletionId?: string,
     *     TypeName?: string,
     *     DeletionStartTime?: \Aws\Api\DateTimeResult,
     *     LastStatus?: 'InProgress'|'Complete',
     *     LastStatusMessage?: string,
     *     DeletionSummary?: InventoryDeletionSummary,
     *     LastStatusUpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
