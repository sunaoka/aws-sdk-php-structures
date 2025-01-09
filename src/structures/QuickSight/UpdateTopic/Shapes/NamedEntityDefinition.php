<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldName
 * @property string $PropertyName
 * @property 'PRIMARY'|'ID' $PropertyRole
 * @property 'INHERIT'|'DIMENSION'|'MEASURE' $PropertyUsage
 * @property NamedEntityDefinitionMetric $Metric
 */
class NamedEntityDefinition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string,
     *     PropertyName?: string,
     *     PropertyRole?: 'PRIMARY'|'ID',
     *     PropertyUsage?: 'INHERIT'|'DIMENSION'|'MEASURE',
     *     Metric?: NamedEntityDefinitionMetric
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
