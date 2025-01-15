<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MeasureName
 * @property string|null $SourceColumn
 * @property string|null $TargetMeasureName
 * @property 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP'|'MULTI' $MeasureValueType
 * @property list<MultiMeasureAttributeMapping>|null $MultiMeasureAttributeMappings
 */
class MixedMeasureMapping extends Shape
{
    /**
     * @param array{
     *     MeasureName?: string|null,
     *     SourceColumn?: string|null,
     *     TargetMeasureName?: string|null,
     *     MeasureValueType: 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP'|'MULTI',
     *     MultiMeasureAttributeMappings?: list<MultiMeasureAttributeMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
