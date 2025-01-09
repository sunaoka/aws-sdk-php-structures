<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FontConfiguration $FontConfiguration
 * @property string $CustomLabel
 * @property AxisLabelReferenceOptions $ApplyTo
 */
class AxisLabelOptions extends Shape
{
    /**
     * @param array{
     *     FontConfiguration?: FontConfiguration,
     *     CustomLabel?: string,
     *     ApplyTo?: AxisLabelReferenceOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
