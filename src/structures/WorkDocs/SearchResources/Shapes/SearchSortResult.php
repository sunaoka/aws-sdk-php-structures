<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RELEVANCE'|'NAME'|'SIZE'|'CREATED_TIMESTAMP'|'MODIFIED_TIMESTAMP' $Field
 * @property 'ASC'|'DESC' $Order
 */
class SearchSortResult extends Shape
{
    /**
     * @param array{
     *     Field?: 'RELEVANCE'|'NAME'|'SIZE'|'CREATED_TIMESTAMP'|'MODIFIED_TIMESTAMP',
     *     Order?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
