<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostAllocationTagsStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TagKey
 * @property 'Active'|'Inactive' $Status
 */
class CostAllocationTagStatusEntry extends Shape
{
    /**
     * @param array{
     *     TagKey: string,
     *     Status: 'Active'|'Inactive'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
