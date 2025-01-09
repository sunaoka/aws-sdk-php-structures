<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchGetRumMetricDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $DimensionKeys
 * @property string $EventPattern
 * @property string $MetricDefinitionId
 * @property string $Name
 * @property string $Namespace
 * @property string $UnitLabel
 * @property string $ValueKey
 */
class MetricDefinition extends Shape
{
    /**
     * @param array{
     *     DimensionKeys?: array<string, string>,
     *     EventPattern?: string,
     *     MetricDefinitionId: string,
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
