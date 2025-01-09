<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $TimeColumn
 * @property list<DimensionMapping> $DimensionMappings
 * @property MultiMeasureMappings $MultiMeasureMappings
 * @property list<MixedMeasureMapping> $MixedMeasureMappings
 * @property string $MeasureNameColumn
 */
class TimestreamConfiguration extends Shape
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     TimeColumn: string,
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
