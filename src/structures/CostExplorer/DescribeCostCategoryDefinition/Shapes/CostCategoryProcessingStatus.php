<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DescribeCostCategoryDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COST_EXPLORER' $Component
 * @property 'PROCESSING'|'APPLIED' $Status
 */
class CostCategoryProcessingStatus extends Shape
{
    /**
     * @param array{
     *     Component?: 'COST_EXPLORER',
     *     Status?: 'PROCESSING'|'APPLIED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
