<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MeasureValue
 * @property 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP' $MeasureValueType
 * @property string $MeasureName
 */
class SingleMeasureMapping extends Shape
{
    /**
     * @param array{
     *     MeasureValue: string,
     *     MeasureValueType: 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP',
     *     MeasureName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
