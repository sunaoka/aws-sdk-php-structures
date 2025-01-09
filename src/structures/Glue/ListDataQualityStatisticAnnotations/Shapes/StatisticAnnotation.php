<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatisticAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileId
 * @property string $StatisticId
 * @property \Aws\Api\DateTimeResult $StatisticRecordedOn
 * @property TimestampedInclusionAnnotation $InclusionAnnotation
 */
class StatisticAnnotation extends Shape
{
    /**
     * @param array{
     *     ProfileId?: string,
     *     StatisticId?: string,
     *     StatisticRecordedOn?: \Aws\Api\DateTimeResult,
     *     InclusionAnnotation?: TimestampedInclusionAnnotation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
