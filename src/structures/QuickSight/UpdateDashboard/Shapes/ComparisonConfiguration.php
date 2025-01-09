<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIFFERENCE'|'PERCENT_DIFFERENCE'|'PERCENT' $ComparisonMethod
 * @property ComparisonFormatConfiguration $ComparisonFormat
 */
class ComparisonConfiguration extends Shape
{
    /**
     * @param array{
     *     ComparisonMethod?: 'DIFFERENCE'|'PERCENT_DIFFERENCE'|'PERCENT',
     *     ComparisonFormat?: ComparisonFormatConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
