<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComparisonOperator
 * @property double $Value
 */
class MetricDimension extends Shape
{
    /**
     * @param array{
     *     ComparisonOperator: string,
     *     Value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
