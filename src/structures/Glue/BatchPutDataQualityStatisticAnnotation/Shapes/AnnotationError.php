<?php

namespace Sunaoka\Aws\Structures\Glue\BatchPutDataQualityStatisticAnnotation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProfileId
 * @property string|null $StatisticId
 * @property string|null $FailureReason
 */
class AnnotationError extends Shape
{
    /**
     * @param array{
     *     ProfileId?: string|null,
     *     StatisticId?: string|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
