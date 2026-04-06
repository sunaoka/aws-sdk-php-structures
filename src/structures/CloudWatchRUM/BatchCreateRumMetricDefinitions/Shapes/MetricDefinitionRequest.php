<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchCreateRumMetricDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $ValueKey
 * @property string|null $UnitLabel
 * @property array<string, string>|null $DimensionKeys
 * @property string|null $EventPattern
 * @property string|null $Namespace
 */
class MetricDefinitionRequest extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ValueKey?: string|null,
     *     UnitLabel?: string|null,
     *     DimensionKeys?: array<string, string>|null,
     *     EventPattern?: string|null,
     *     Namespace?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
