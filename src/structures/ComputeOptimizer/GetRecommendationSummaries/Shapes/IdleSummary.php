<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Idle'|'Unattached' $name
 * @property double $value
 */
class IdleSummary extends Shape
{
    /**
     * @param array{
     *     name?: 'Idle'|'Unattached',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
