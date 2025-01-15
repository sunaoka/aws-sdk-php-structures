<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TimeValue
 * @property 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS'|null $EpochTimeUnit
 * @property 'EPOCH'|'TIMESTAMP_FORMAT'|null $TimeFieldType
 * @property string|null $TimestampFormat
 * @property string $VersionValue
 * @property list<DimensionMapping> $DimensionMappings
 * @property list<SingleMeasureMapping>|null $SingleMeasureMappings
 * @property list<MultiMeasureMapping>|null $MultiMeasureMappings
 */
class PipeTargetTimestreamParameters extends Shape
{
    /**
     * @param array{
     *     TimeValue: string,
     *     EpochTimeUnit?: 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS'|null,
     *     TimeFieldType?: 'EPOCH'|'TIMESTAMP_FORMAT'|null,
     *     TimestampFormat?: string|null,
     *     VersionValue: string,
     *     DimensionMappings: list<DimensionMapping>,
     *     SingleMeasureMappings?: list<SingleMeasureMapping>|null,
     *     MultiMeasureMappings?: list<MultiMeasureMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
