<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUDE'|'EXCLUDE'|null $Value
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 */
class TimestampedInclusionAnnotation extends Shape
{
    /**
     * @param array{
     *     Value?: 'INCLUDE'|'EXCLUDE'|null,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
