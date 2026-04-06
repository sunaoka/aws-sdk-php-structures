<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QueryId
 * @property 'Category'|'BusinessChain'|null $QueryType
 */
class SuggestQueryResult extends Shape
{
    /**
     * @param array{
     *     QueryId?: string|null,
     *     QueryType?: 'Category'|'BusinessChain'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
