<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\SearchDiscoverableRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property McpServerDescriptor|null $mcpServer
 * @property A2aAgentCardDescriptor|null $a2aAgentCard
 * @property AgentSkillsDefinitionDescriptor|null $agentSkillsDefinition
 * @property CustomDescriptor|null $custom
 */
class Descriptors extends Shape
{
    /**
     * @param array{
     *     mcpServer?: McpServerDescriptor|null,
     *     a2aAgentCard?: A2aAgentCardDescriptor|null,
     *     agentSkillsDefinition?: AgentSkillsDefinitionDescriptor|null,
     *     custom?: CustomDescriptor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
