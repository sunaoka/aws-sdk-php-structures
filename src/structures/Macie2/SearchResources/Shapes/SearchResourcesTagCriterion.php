<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'NE'|null $comparator
 * @property list<SearchResourcesTagCriterionPair>|null $tagValues
 */
class SearchResourcesTagCriterion extends Shape
{
    /**
     * @param array{
     *     comparator?: 'EQ'|'NE'|null,
     *     tagValues?: list<SearchResourcesTagCriterionPair>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
