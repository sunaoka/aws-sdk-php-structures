<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'AGENT_NAME'|null $Name
 * @property 'StringEquals'|'StringLike'|null $Operator
 * @property string|null $Value
 */
class AgentSearchFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'AGENT_NAME'|null,
     *     Operator?: 'StringEquals'|'StringLike'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
