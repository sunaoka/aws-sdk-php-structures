<?php

namespace Sunaoka\Aws\Structures\Connect\SearchAgentStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ControlPlaneAttributeFilter $AttributeFilter
 */
class AgentStatusSearchFilter extends Shape
{
    /**
     * @param array{AttributeFilter?: ControlPlaneAttributeFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
