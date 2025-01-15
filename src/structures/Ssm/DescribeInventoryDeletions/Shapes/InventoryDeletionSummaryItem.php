<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInventoryDeletions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Version
 * @property int|null $Count
 * @property int|null $RemainingCount
 */
class InventoryDeletionSummaryItem extends Shape
{
    /**
     * @param array{
     *     Version?: string|null,
     *     Count?: int|null,
     *     RemainingCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
