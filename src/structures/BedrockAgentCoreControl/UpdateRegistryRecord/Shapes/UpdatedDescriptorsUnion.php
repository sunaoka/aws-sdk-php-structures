<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedMcpDescriptor|null $mcp
 * @property UpdatedA2aDescriptor|null $a2a
 * @property UpdatedCustomDescriptor|null $custom
 * @property UpdatedAgentSkillsDescriptor|null $agentSkills
 */
class UpdatedDescriptorsUnion extends Shape
{
    /**
     * @param array{
     *     mcp?: UpdatedMcpDescriptor|null,
     *     a2a?: UpdatedA2aDescriptor|null,
     *     custom?: UpdatedCustomDescriptor|null,
     *     agentSkills?: UpdatedAgentSkillsDescriptor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
