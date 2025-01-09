<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostAllocationTagsStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CostAllocationTagStatusEntry> $CostAllocationTagsStatus
 */
class UpdateCostAllocationTagsStatusRequest extends Request
{
    /**
     * @param array{CostAllocationTagsStatus: list<Shapes\CostAllocationTagStatusEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
