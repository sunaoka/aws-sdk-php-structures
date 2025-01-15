<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\WriteRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Dimension>|null $Dimensions
 * @property string|null $MeasureName
 * @property string|null $MeasureValue
 * @property 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP'|'MULTI'|null $MeasureValueType
 * @property string|null $Time
 * @property 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS'|null $TimeUnit
 * @property int|null $Version
 * @property list<MeasureValue>|null $MeasureValues
 */
class Record extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<Dimension>|null,
     *     MeasureName?: string|null,
     *     MeasureValue?: string|null,
     *     MeasureValueType?: 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP'|'MULTI'|null,
     *     Time?: string|null,
     *     TimeUnit?: 'MILLISECONDS'|'SECONDS'|'MICROSECONDS'|'NANOSECONDS'|null,
     *     Version?: int|null,
     *     MeasureValues?: list<MeasureValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
