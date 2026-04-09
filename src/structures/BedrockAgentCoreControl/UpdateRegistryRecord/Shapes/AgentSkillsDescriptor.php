<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SkillMdDefinition|null $skillMd
 * @property SkillDefinition|null $skillDefinition
 */
class AgentSkillsDescriptor extends Shape
{
    /**
     * @param array{
     *     skillMd?: SkillMdDefinition|null,
     *     skillDefinition?: SkillDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
