<?php

namespace Sunaoka\Aws\Structures\EKS\ListEksAnywhereSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $duration
 * @property 'MONTHS'|null $unit
 */
class EksAnywhereSubscriptionTerm extends Shape
{
    /**
     * @param array{
     *     duration?: int|null,
     *     unit?: 'MONTHS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
