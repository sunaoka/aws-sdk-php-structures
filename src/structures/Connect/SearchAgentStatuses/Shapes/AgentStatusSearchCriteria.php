<?php

namespace Sunaoka\Aws\Structures\Connect\SearchAgentStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AgentStatusSearchCriteria>|null $OrConditions
 * @property list<AgentStatusSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class AgentStatusSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<AgentStatusSearchCriteria>|null,
     *     AndConditions?: list<AgentStatusSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
