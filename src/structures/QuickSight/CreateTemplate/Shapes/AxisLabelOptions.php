<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FontConfiguration|null $FontConfiguration
 * @property string|null $CustomLabel
 * @property AxisLabelReferenceOptions|null $ApplyTo
 */
class AxisLabelOptions extends Shape
{
    /**
     * @param array{
     *     FontConfiguration?: FontConfiguration|null,
     *     CustomLabel?: string|null,
     *     ApplyTo?: AxisLabelReferenceOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
