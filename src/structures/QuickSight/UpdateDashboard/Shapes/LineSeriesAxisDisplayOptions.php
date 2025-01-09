<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AxisDisplayOptions $AxisOptions
 * @property list<MissingDataConfiguration> $MissingDataConfigurations
 */
class LineSeriesAxisDisplayOptions extends Shape
{
    /**
     * @param array{
     *     AxisOptions?: AxisDisplayOptions,
     *     MissingDataConfigurations?: list<MissingDataConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
