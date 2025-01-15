<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RELEVANCE'|'NAME'|'SIZE'|'CREATED_TIMESTAMP'|'MODIFIED_TIMESTAMP'|null $Field
 * @property 'ASC'|'DESC'|null $Order
 */
class SearchSortResult extends Shape
{
    /**
     * @param array{
     *     Field?: 'RELEVANCE'|'NAME'|'SIZE'|'CREATED_TIMESTAMP'|'MODIFIED_TIMESTAMP'|null,
     *     Order?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
