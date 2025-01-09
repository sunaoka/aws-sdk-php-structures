<?php

namespace Sunaoka\Aws\Structures\Glue\BatchPutDataQualityStatisticAnnotation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileId
 * @property string $StatisticId
 * @property string $FailureReason
 */
class AnnotationError extends Shape
{
    /**
     * @param array{
     *     ProfileId?: string,
     *     StatisticId?: string,
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
