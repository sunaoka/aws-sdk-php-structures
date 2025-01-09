<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalCount
 * @property int $RemainingCount
 * @property list<InventoryDeletionSummaryItem> $SummaryItems
 */
class InventoryDeletionSummary extends Shape
{
    /**
     * @param array{
     *     TotalCount?: int,
     *     RemainingCount?: int,
     *     SummaryItems?: list<InventoryDeletionSummaryItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
