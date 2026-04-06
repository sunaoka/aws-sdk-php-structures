<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Color
 * @property double $DataValue
 */
class GeospatialGradientStepColor extends Shape
{
    /**
     * @param array{
     *     Color: string,
     *     DataValue: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
