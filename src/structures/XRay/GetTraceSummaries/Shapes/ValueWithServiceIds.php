<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnnotationValue|null $AnnotationValue
 * @property list<ServiceId>|null $ServiceIds
 */
class ValueWithServiceIds extends Shape
{
    /**
     * @param array{
     *     AnnotationValue?: AnnotationValue|null,
     *     ServiceIds?: list<ServiceId>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
