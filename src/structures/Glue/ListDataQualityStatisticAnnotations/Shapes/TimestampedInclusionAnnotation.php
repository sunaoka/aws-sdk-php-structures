<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatisticAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUDE'|'EXCLUDE' $Value
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 */
class TimestampedInclusionAnnotation extends Shape
{
    /**
     * @param array{
     *     Value?: 'INCLUDE'|'EXCLUDE',
     *     LastModifiedOn?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
