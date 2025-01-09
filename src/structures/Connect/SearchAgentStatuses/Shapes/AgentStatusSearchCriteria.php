<?php

namespace Sunaoka\Aws\Structures\Connect\SearchAgentStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AgentStatusSearchCriteria> $OrConditions
 * @property list<AgentStatusSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 */
class AgentStatusSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<AgentStatusSearchCriteria>,
     *     AndConditions?: list<AgentStatusSearchCriteria>,
     *     StringCondition?: StringCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
