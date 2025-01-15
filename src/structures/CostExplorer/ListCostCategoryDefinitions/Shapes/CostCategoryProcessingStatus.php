<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostCategoryDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COST_EXPLORER'|null $Component
 * @property 'PROCESSING'|'APPLIED'|null $Status
 */
class CostCategoryProcessingStatus extends Shape
{
    /**
     * @param array{
     *     Component?: 'COST_EXPLORER'|null,
     *     Status?: 'PROCESSING'|'APPLIED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
