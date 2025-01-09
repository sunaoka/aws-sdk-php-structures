<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10> $MaxVisibleRows
 * @property int<1, 10> $MaxVisibleColumns
 * @property PanelConfiguration $PanelConfiguration
 * @property SmallMultiplesAxisProperties $XAxis
 * @property SmallMultiplesAxisProperties $YAxis
 */
class SmallMultiplesOptions extends Shape
{
    /**
     * @param array{
     *     MaxVisibleRows?: int<1, 10>,
     *     MaxVisibleColumns?: int<1, 10>,
     *     PanelConfiguration?: PanelConfiguration,
     *     XAxis?: SmallMultiplesAxisProperties,
     *     YAxis?: SmallMultiplesAxisProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
