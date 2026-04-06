<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentAliasArn
 */
class AgentFlowNodeConfiguration extends Shape
{
    /**
     * @param array{agentAliasArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
