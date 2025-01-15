<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceColumn
 * @property string|null $TargetMultiMeasureAttributeName
 * @property 'DOUBLE'|'BIGINT'|'BOOLEAN'|'VARCHAR'|'TIMESTAMP'|null $MeasureValueType
 */
class MultiMeasureAttributeMapping extends Shape
{
    /**
     * @param array{
     *     SourceColumn: string,
     *     TargetMultiMeasureAttributeName?: string|null,
     *     MeasureValueType?: 'DOUBLE'|'BIGINT'|'BOOLEAN'|'VARCHAR'|'TIMESTAMP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
