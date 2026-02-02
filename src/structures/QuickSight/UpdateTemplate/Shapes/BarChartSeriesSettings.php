<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DecalSettings|null $DecalSettings
 * @property BorderSettings|null $BorderSettings
 */
class BarChartSeriesSettings extends Shape
{
    /**
     * @param array{
     *     DecalSettings?: DecalSettings|null,
     *     BorderSettings?: BorderSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
