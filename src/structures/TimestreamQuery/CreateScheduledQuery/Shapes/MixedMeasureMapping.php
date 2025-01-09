<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\CreateScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MeasureName
 * @property string $SourceColumn
 * @property string $TargetMeasureName
 * @property 'BIGINT'|'BOOLEAN'|'DOUBLE'|'VARCHAR'|'MULTI' $MeasureValueType
 * @property list<MultiMeasureAttributeMapping> $MultiMeasureAttributeMappings
 */
class MixedMeasureMapping extends Shape
{
    /**
     * @param array{
     *     MeasureName?: string,
     *     SourceColumn?: string,
     *     TargetMeasureName?: string,
     *     MeasureValueType: 'BIGINT'|'BOOLEAN'|'DOUBLE'|'VARCHAR'|'MULTI',
     *     MultiMeasureAttributeMappings?: list<MultiMeasureAttributeMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
