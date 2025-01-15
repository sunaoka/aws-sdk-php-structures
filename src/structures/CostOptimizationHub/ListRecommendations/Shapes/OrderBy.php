<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dimension
 * @property 'Asc'|'Desc'|null $order
 */
class OrderBy extends Shape
{
    /**
     * @param array{
     *     dimension?: string|null,
     *     order?: 'Asc'|'Desc'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
