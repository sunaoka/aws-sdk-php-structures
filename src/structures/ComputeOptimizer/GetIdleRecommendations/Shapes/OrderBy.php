<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SavingsValue'|'SavingsValueAfterDiscount'|null $dimension
 * @property 'Asc'|'Desc'|null $order
 */
class OrderBy extends Shape
{
    /**
     * @param array{
     *     dimension?: 'SavingsValue'|'SavingsValueAfterDiscount'|null,
     *     order?: 'Asc'|'Desc'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
