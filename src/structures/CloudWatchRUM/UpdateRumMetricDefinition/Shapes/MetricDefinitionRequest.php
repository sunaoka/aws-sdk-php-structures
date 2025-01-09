<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\UpdateRumMetricDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $DimensionKeys
 * @property string $EventPattern
 * @property string $Name
 * @property string $Namespace
 * @property string $UnitLabel
 * @property string $ValueKey
 */
class MetricDefinitionRequest extends Shape
{
    /**
     * @param array{
     *     DimensionKeys?: array<string, string>,
     *     EventPattern?: string,
     *     Name: string,
     *     Namespace?: string,
     *     UnitLabel?: string,
     *     ValueKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
