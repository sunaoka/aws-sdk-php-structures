<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateEksAnywhereSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $duration
 * @property 'MONTHS' $unit
 */
class EksAnywhereSubscriptionTerm extends Shape
{
    /**
     * @param array{
     *     duration?: int,
     *     unit?: 'MONTHS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
