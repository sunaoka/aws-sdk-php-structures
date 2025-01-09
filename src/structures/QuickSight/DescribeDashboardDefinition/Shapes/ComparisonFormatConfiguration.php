<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumberDisplayFormatConfiguration $NumberDisplayFormatConfiguration
 * @property PercentageDisplayFormatConfiguration $PercentageDisplayFormatConfiguration
 */
class ComparisonFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     NumberDisplayFormatConfiguration?: NumberDisplayFormatConfiguration,
     *     PercentageDisplayFormatConfiguration?: PercentageDisplayFormatConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
