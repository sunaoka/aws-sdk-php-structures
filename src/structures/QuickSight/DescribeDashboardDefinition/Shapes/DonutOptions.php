<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArcOptions $ArcOptions
 * @property DonutCenterOptions $DonutCenterOptions
 */
class DonutOptions extends Shape
{
    /**
     * @param array{
     *     ArcOptions?: ArcOptions,
     *     DonutCenterOptions?: DonutCenterOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
