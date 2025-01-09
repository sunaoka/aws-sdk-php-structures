<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TimeColumn
 * @property 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS' $TimeUnit
 * @property list<DimensionMapping> $DimensionMappings
 * @property MultiMeasureMappings $MultiMeasureMappings
 * @property list<MixedMeasureMapping> $MixedMeasureMappings
 * @property string $MeasureNameColumn
 */
class DataModel extends Shape
{
    /**
     * @param array{
     *     TimeColumn?: string,
     *     TimeUnit?: 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS',
     *     DimensionMappings: list<DimensionMapping>,
     *     MultiMeasureMappings?: MultiMeasureMappings,
     *     MixedMeasureMappings?: list<MixedMeasureMapping>,
     *     MeasureNameColumn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
