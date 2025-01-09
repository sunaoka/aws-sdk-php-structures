<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxVisibleRows
 * @property int $MaxVisibleColumns
 * @property PanelConfiguration $PanelConfiguration
 * @property SmallMultiplesAxisProperties $XAxis
 * @property SmallMultiplesAxisProperties $YAxis
 */
class SmallMultiplesOptions extends Shape
{
    /**
     * @param array{
     *     MaxVisibleRows?: int,
     *     MaxVisibleColumns?: int,
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
