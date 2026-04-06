<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $searchTerm
 * @property 'FUZZY_MATCH'|'CONTAINS'|null $matchType
 */
class SearchTermFilterExpression extends Shape
{
    /**
     * @param array{
     *     searchTerm: string,
     *     matchType?: 'FUZZY_MATCH'|'CONTAINS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
