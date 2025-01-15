<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\CreateScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $TimeColumn
 * @property list<DimensionMapping> $DimensionMappings
 * @property MultiMeasureMappings|null $MultiMeasureMappings
 * @property list<MixedMeasureMapping>|null $MixedMeasureMappings
 * @property string|null $MeasureNameColumn
 */
class TimestreamConfiguration extends Shape
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     TimeColumn: string,
     *     DimensionMappings: list<DimensionMapping>,
     *     MultiMeasureMappings?: MultiMeasureMappings|null,
     *     MixedMeasureMappings?: list<MixedMeasureMapping>|null,
     *     MeasureNameColumn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
