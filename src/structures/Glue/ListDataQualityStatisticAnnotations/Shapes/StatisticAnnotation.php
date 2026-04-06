<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatisticAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProfileId
 * @property string|null $StatisticId
 * @property \Aws\Api\DateTimeResult|null $StatisticRecordedOn
 * @property TimestampedInclusionAnnotation|null $InclusionAnnotation
 */
class StatisticAnnotation extends Shape
{
    /**
     * @param array{
     *     ProfileId?: string|null,
     *     StatisticId?: string|null,
     *     StatisticRecordedOn?: \Aws\Api\DateTimeResult|null,
     *     InclusionAnnotation?: TimestampedInclusionAnnotation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
