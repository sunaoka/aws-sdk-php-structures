<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Color
 * @property double|null $DataValue
 */
class DataColor extends Shape
{
    /**
     * @param array{
     *     Color?: string|null,
     *     DataValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
