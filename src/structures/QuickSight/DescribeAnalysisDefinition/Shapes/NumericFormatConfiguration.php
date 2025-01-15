<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumberDisplayFormatConfiguration|null $NumberDisplayFormatConfiguration
 * @property CurrencyDisplayFormatConfiguration|null $CurrencyDisplayFormatConfiguration
 * @property PercentageDisplayFormatConfiguration|null $PercentageDisplayFormatConfiguration
 */
class NumericFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     NumberDisplayFormatConfiguration?: NumberDisplayFormatConfiguration|null,
     *     CurrencyDisplayFormatConfiguration?: CurrencyDisplayFormatConfiguration|null,
     *     PercentageDisplayFormatConfiguration?: PercentageDisplayFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
