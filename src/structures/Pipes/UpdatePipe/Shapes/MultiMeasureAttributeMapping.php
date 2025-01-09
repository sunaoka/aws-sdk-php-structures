<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MeasureValue
 * @property 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP' $MeasureValueType
 * @property string $MultiMeasureAttributeName
 */
class MultiMeasureAttributeMapping extends Shape
{
    /**
     * @param array{
     *     MeasureValue: string,
     *     MeasureValueType: 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP',
     *     MultiMeasureAttributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
