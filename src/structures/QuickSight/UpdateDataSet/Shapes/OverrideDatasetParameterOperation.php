<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterName
 * @property string $NewParameterName
 * @property NewDefaultValues $NewDefaultValues
 */
class OverrideDatasetParameterOperation extends Shape
{
    /**
     * @param array{
     *     ParameterName: string,
     *     NewParameterName?: string,
     *     NewDefaultValues?: NewDefaultValues
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
