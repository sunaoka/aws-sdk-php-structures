<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MeasureName
 * @property string $SourceColumn
 * @property string $TargetMeasureName
 * @property 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP'|'MULTI' $MeasureValueType
 * @property list<MultiMeasureAttributeMapping> $MultiMeasureAttributeMappings
 */
class MixedMeasureMapping extends Shape
{
    /**
     * @param array{
     *     MeasureName?: string,
     *     SourceColumn?: string,
     *     TargetMeasureName?: string,
     *     MeasureValueType: 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP'|'MULTI',
     *     MultiMeasureAttributeMappings?: list<MultiMeasureAttributeMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
