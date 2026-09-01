<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedMcpServerDescriptor|null $mcpServer
 * @property UpdatedA2aAgentCardDescriptor|null $a2aAgentCard
 * @property UpdatedAgentSkillsDefinitionDescriptor|null $agentSkillsDefinition
 * @property UpdatedCustomDescriptor|null $custom
 * @property UpdatedHttpDescriptor|null $http
 * @property UpdatedAgUiDescriptor|null $agui
 */
class UpdatedDescriptorsFields extends Shape
{
    /**
     * @param array{
     *     mcpServer?: UpdatedMcpServerDescriptor|null,
     *     a2aAgentCard?: UpdatedA2aAgentCardDescriptor|null,
     *     agentSkillsDefinition?: UpdatedAgentSkillsDefinitionDescriptor|null,
     *     custom?: UpdatedCustomDescriptor|null,
     *     http?: UpdatedHttpDescriptor|null,
     *     agui?: UpdatedAgUiDescriptor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
