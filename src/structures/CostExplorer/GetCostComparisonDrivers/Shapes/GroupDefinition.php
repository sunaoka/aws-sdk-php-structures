<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostComparisonDrivers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIMENSION'|'TAG'|'COST_CATEGORY'|null $Type
 * @property string|null $Key
 */
class GroupDefinition extends Shape
{
    /**
     * @param array{
     *     Type?: 'DIMENSION'|'TAG'|'COST_CATEGORY'|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
