<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumberDisplayFormatConfiguration|null $NumberDisplayFormatConfiguration
 * @property PercentageDisplayFormatConfiguration|null $PercentageDisplayFormatConfiguration
 */
class ComparisonFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     NumberDisplayFormatConfiguration?: NumberDisplayFormatConfiguration|null,
     *     PercentageDisplayFormatConfiguration?: PercentageDisplayFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
