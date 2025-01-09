<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TimeValue
 * @property 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS' $EpochTimeUnit
 * @property 'EPOCH'|'TIMESTAMP_FORMAT' $TimeFieldType
 * @property string $TimestampFormat
 * @property string $VersionValue
 * @property list<DimensionMapping> $DimensionMappings
 * @property list<SingleMeasureMapping> $SingleMeasureMappings
 * @property list<MultiMeasureMapping> $MultiMeasureMappings
 */
class PipeTargetTimestreamParameters extends Shape
{
    /**
     * @param array{
     *     TimeValue: string,
     *     EpochTimeUnit?: 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS',
     *     TimeFieldType?: 'EPOCH'|'TIMESTAMP_FORMAT',
     *     TimestampFormat?: string,
     *     VersionValue: string,
     *     DimensionMappings: list<DimensionMapping>,
     *     SingleMeasureMappings?: list<SingleMeasureMapping>,
     *     MultiMeasureMappings?: list<MultiMeasureMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
