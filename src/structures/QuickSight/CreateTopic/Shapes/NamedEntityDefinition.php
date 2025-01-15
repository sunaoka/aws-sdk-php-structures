<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property string|null $PropertyName
 * @property 'PRIMARY'|'ID'|null $PropertyRole
 * @property 'INHERIT'|'DIMENSION'|'MEASURE'|null $PropertyUsage
 * @property NamedEntityDefinitionMetric|null $Metric
 */
class NamedEntityDefinition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     PropertyName?: string|null,
     *     PropertyRole?: 'PRIMARY'|'ID'|null,
     *     PropertyUsage?: 'INHERIT'|'DIMENSION'|'MEASURE'|null,
     *     Metric?: NamedEntityDefinitionMetric|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
