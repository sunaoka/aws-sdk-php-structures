<?php

namespace Sunaoka\Aws\Structures\Glue\BatchPutDataQualityStatisticAnnotation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProfileId
 * @property string|null $StatisticId
 * @property 'INCLUDE'|'EXCLUDE'|null $InclusionAnnotation
 */
class DatapointInclusionAnnotation extends Shape
{
    /**
     * @param array{
     *     ProfileId?: string|null,
     *     StatisticId?: string|null,
     *     InclusionAnnotation?: 'INCLUDE'|'EXCLUDE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
