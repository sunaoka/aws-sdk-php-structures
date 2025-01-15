<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10>|null $MaxVisibleRows
 * @property int<1, 10>|null $MaxVisibleColumns
 * @property PanelConfiguration|null $PanelConfiguration
 * @property SmallMultiplesAxisProperties|null $XAxis
 * @property SmallMultiplesAxisProperties|null $YAxis
 */
class SmallMultiplesOptions extends Shape
{
    /**
     * @param array{
     *     MaxVisibleRows?: int<1, 10>|null,
     *     MaxVisibleColumns?: int<1, 10>|null,
     *     PanelConfiguration?: PanelConfiguration|null,
     *     XAxis?: SmallMultiplesAxisProperties|null,
     *     YAxis?: SmallMultiplesAxisProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
