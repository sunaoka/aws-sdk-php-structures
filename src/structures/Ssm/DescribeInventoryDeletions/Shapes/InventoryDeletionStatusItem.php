<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInventoryDeletions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeletionId
 * @property string|null $TypeName
 * @property \Aws\Api\DateTimeResult|null $DeletionStartTime
 * @property 'InProgress'|'Complete'|null $LastStatus
 * @property string|null $LastStatusMessage
 * @property InventoryDeletionSummary|null $DeletionSummary
 * @property \Aws\Api\DateTimeResult|null $LastStatusUpdateTime
 */
class InventoryDeletionStatusItem extends Shape
{
    /**
     * @param array{
     *     DeletionId?: string|null,
     *     TypeName?: string|null,
     *     DeletionStartTime?: \Aws\Api\DateTimeResult|null,
     *     LastStatus?: 'InProgress'|'Complete'|null,
     *     LastStatusMessage?: string|null,
     *     DeletionSummary?: InventoryDeletionSummary|null,
     *     LastStatusUpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
