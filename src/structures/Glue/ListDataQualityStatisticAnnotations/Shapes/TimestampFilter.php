<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatisticAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $RecordedBefore
 * @property \Aws\Api\DateTimeResult $RecordedAfter
 */
class TimestampFilter extends Shape
{
    /**
     * @param array{
     *     RecordedBefore?: \Aws\Api\DateTimeResult,
     *     RecordedAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
