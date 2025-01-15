<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalCount
 * @property int|null $RemainingCount
 * @property list<InventoryDeletionSummaryItem>|null $SummaryItems
 */
class InventoryDeletionSummary extends Shape
{
    /**
     * @param array{
     *     TotalCount?: int|null,
     *     RemainingCount?: int|null,
     *     SummaryItems?: list<InventoryDeletionSummaryItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
