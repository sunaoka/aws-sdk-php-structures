<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnnotationValue $AnnotationValue
 * @property list<ServiceId> $ServiceIds
 */
class ValueWithServiceIds extends Shape
{
    /**
     * @param array{
     *     AnnotationValue?: AnnotationValue,
     *     ServiceIds?: list<ServiceId>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
