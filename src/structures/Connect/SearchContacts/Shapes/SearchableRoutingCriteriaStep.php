<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SearchableAgentCriteriaStep|null $AgentCriteria
 */
class SearchableRoutingCriteriaStep extends Shape
{
    /**
     * @param array{AgentCriteria?: SearchableAgentCriteriaStep|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
