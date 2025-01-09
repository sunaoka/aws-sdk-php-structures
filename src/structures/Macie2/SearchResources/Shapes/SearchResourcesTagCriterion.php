<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'NE' $comparator
 * @property list<SearchResourcesTagCriterionPair> $tagValues
 */
class SearchResourcesTagCriterion extends Shape
{
    /**
     * @param array{
     *     comparator?: 'EQ'|'NE',
     *     tagValues?: list<SearchResourcesTagCriterionPair>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
