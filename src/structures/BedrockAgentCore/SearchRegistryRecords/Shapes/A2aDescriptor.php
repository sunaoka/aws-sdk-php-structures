<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\SearchRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentCardDefinition $agentCard
 */
class A2aDescriptor extends Shape
{
    /**
     * @param array{agentCard: AgentCardDefinition} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
