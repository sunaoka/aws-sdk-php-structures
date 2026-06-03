<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AiAgentSearchCriteria>|null $Criteria
 */
class AiAgentsCriteria extends Shape
{
    /**
     * @param array{Criteria?: list<AiAgentSearchCriteria>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
