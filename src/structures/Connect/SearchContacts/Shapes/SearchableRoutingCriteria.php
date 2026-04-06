<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SearchableRoutingCriteriaStep>|null $Steps
 */
class SearchableRoutingCriteria extends Shape
{
    /**
     * @param array{Steps?: list<SearchableRoutingCriteriaStep>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
