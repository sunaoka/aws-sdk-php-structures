<?php

namespace Sunaoka\Aws\Structures\Glue\BatchPutDataQualityStatisticAnnotation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileId
 * @property string $StatisticId
 * @property 'INCLUDE'|'EXCLUDE' $InclusionAnnotation
 */
class DatapointInclusionAnnotation extends Shape
{
    /**
     * @param array{
     *     ProfileId?: string,
     *     StatisticId?: string,
     *     InclusionAnnotation?: 'INCLUDE'|'EXCLUDE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
