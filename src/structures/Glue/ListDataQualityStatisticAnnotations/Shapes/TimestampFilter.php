<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatisticAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $RecordedBefore
 * @property \Aws\Api\DateTimeResult|null $RecordedAfter
 */
class TimestampFilter extends Shape
{
    /**
     * @param array{
     *     RecordedBefore?: \Aws\Api\DateTimeResult|null,
     *     RecordedAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
