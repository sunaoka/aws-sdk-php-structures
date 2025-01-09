<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInventoryDeletions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 * @property int $Count
 * @property int $RemainingCount
 */
class InventoryDeletionSummaryItem extends Shape
{
    /**
     * @param array{
     *     Version?: string,
     *     Count?: int,
     *     RemainingCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
