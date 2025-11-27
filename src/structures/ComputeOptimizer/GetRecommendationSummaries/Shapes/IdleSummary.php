<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Idle'|'Unattached'|'Unused'|null $name
 * @property double|null $value
 */
class IdleSummary extends Shape
{
    /**
     * @param array{
     *     name?: 'Idle'|'Unattached'|'Unused'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
