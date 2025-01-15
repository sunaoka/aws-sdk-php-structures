<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TimeColumn
 * @property 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS'|null $TimeUnit
 * @property list<DimensionMapping> $DimensionMappings
 * @property MultiMeasureMappings|null $MultiMeasureMappings
 * @property list<MixedMeasureMapping>|null $MixedMeasureMappings
 * @property string|null $MeasureNameColumn
 */
class DataModel extends Shape
{
    /**
     * @param array{
     *     TimeColumn?: string|null,
     *     TimeUnit?: 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS'|null,
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
