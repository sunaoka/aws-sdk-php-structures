<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SavingsValue'|'SavingsValueAfterDiscount' $dimension
 * @property 'Asc'|'Desc' $order
 */
class OrderBy extends Shape
{
    /**
     * @param array{
     *     dimension?: 'SavingsValue'|'SavingsValueAfterDiscount',
     *     order?: 'Asc'|'Desc'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
