<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\SearchRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SkillMdDefinition $skillMd
 * @property SkillDefinition|null $skillDefinition
 */
class AgentSkillsDescriptor extends Shape
{
    /**
     * @param array{
     *     skillMd: SkillMdDefinition,
     *     skillDefinition?: SkillDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
