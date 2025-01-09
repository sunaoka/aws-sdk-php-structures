<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageWithResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property array<string, string> $Attributes
 */
class DimensionValuesWithAttributes extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
