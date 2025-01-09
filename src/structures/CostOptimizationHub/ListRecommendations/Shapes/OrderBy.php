<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dimension
 * @property 'Asc'|'Desc' $order
 */
class OrderBy extends Shape
{
    /**
     * @param array{
     *     dimension?: string,
     *     order?: 'Asc'|'Desc'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
