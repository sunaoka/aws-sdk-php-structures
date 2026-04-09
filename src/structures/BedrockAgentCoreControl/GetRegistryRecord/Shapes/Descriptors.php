<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property McpDescriptor|null $mcp
 * @property A2aDescriptor|null $a2a
 * @property CustomDescriptor|null $custom
 * @property AgentSkillsDescriptor|null $agentSkills
 */
class Descriptors extends Shape
{
    /**
     * @param array{
     *     mcp?: McpDescriptor|null,
     *     a2a?: A2aDescriptor|null,
     *     custom?: CustomDescriptor|null,
     *     agentSkills?: AgentSkillsDescriptor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
