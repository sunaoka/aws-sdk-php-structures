<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MeasureName
 * @property string|null $SourceColumn
 * @property string|null $TargetMeasureName
 * @property 'BIGINT'|'BOOLEAN'|'DOUBLE'|'VARCHAR'|'MULTI' $MeasureValueType
 * @property list<MultiMeasureAttributeMapping>|null $MultiMeasureAttributeMappings
 */
class MixedMeasureMapping extends Shape
{
    /**
     * @param array{
     *     MeasureName?: string|null,
     *     SourceColumn?: string|null,
     *     TargetMeasureName?: string|null,
     *     MeasureValueType: 'BIGINT'|'BOOLEAN'|'DOUBLE'|'VARCHAR'|'MULTI',
     *     MultiMeasureAttributeMappings?: list<MultiMeasureAttributeMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
