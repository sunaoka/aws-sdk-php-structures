<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\CreateScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceColumn
 * @property string|null $TargetMultiMeasureAttributeName
 * @property 'BIGINT'|'BOOLEAN'|'DOUBLE'|'VARCHAR'|'TIMESTAMP' $MeasureValueType
 */
class MultiMeasureAttributeMapping extends Shape
{
    /**
     * @param array{
     *     SourceColumn: string,
     *     TargetMultiMeasureAttributeName?: string|null,
     *     MeasureValueType: 'BIGINT'|'BOOLEAN'|'DOUBLE'|'VARCHAR'|'TIMESTAMP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
