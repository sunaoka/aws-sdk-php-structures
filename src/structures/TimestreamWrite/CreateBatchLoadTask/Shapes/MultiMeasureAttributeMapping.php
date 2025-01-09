<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceColumn
 * @property string $TargetMultiMeasureAttributeName
 * @property 'DOUBLE'|'BIGINT'|'BOOLEAN'|'VARCHAR'|'TIMESTAMP' $MeasureValueType
 */
class MultiMeasureAttributeMapping extends Shape
{
    /**
     * @param array{
     *     SourceColumn: string,
     *     TargetMultiMeasureAttributeName?: string,
     *     MeasureValueType?: 'DOUBLE'|'BIGINT'|'BOOLEAN'|'VARCHAR'|'TIMESTAMP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
