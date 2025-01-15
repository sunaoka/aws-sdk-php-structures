<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageWithResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property array<string, string>|null $Attributes
 */
class DimensionValuesWithAttributes extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
