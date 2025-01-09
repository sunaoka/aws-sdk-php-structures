<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\WriteRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Dimension> $Dimensions
 * @property string $MeasureName
 * @property string $MeasureValue
 * @property 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP'|'MULTI' $MeasureValueType
 * @property string $Time
 * @property 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS' $TimeUnit
 * @property int $Version
 * @property list<MeasureValue> $MeasureValues
 */
class Record extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<Dimension>,
     *     MeasureName?: string,
     *     MeasureValue?: string,
     *     MeasureValueType?: 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP'|'MULTI',
     *     Time?: string,
     *     TimeUnit?: 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS',
     *     Version?: int,
     *     MeasureValues?: list<MeasureValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
