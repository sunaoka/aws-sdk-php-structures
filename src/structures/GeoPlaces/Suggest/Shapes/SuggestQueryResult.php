<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryId
 * @property 'Category'|'BusinessChain' $QueryType
 */
class SuggestQueryResult extends Shape
{
    /**
     * @param array{
     *     QueryId?: string,
     *     QueryType?: 'Category'|'BusinessChain'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
