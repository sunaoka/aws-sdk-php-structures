<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumberDisplayFormatConfiguration $NumberDisplayFormatConfiguration
 * @property CurrencyDisplayFormatConfiguration $CurrencyDisplayFormatConfiguration
 * @property PercentageDisplayFormatConfiguration $PercentageDisplayFormatConfiguration
 */
class NumericFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     NumberDisplayFormatConfiguration?: NumberDisplayFormatConfiguration,
     *     CurrencyDisplayFormatConfiguration?: CurrencyDisplayFormatConfiguration,
     *     PercentageDisplayFormatConfiguration?: PercentageDisplayFormatConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
