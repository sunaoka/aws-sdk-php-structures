<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterName
 * @property string|null $NewParameterName
 * @property NewDefaultValues|null $NewDefaultValues
 */
class OverrideDatasetParameterOperation extends Shape
{
    /**
     * @param array{
     *     ParameterName: string,
     *     NewParameterName?: string|null,
     *     NewDefaultValues?: NewDefaultValues|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
