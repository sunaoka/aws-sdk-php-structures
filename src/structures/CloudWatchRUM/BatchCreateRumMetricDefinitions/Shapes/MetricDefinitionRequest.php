<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchCreateRumMetricDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $DimensionKeys
 * @property string|null $EventPattern
 * @property string $Name
 * @property string|null $Namespace
 * @property string|null $UnitLabel
 * @property string|null $ValueKey
 */
class MetricDefinitionRequest extends Shape
{
    /**
     * @param array{
     *     DimensionKeys?: array<string, string>|null,
     *     EventPattern?: string|null,
     *     Name: string,
     *     Namespace?: string|null,
     *     UnitLabel?: string|null,
     *     ValueKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
