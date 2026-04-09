<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedSkillMdDefinition|null $skillMd
 * @property UpdatedSkillDefinition|null $skillDefinition
 */
class UpdatedAgentSkillsDescriptorFields extends Shape
{
    /**
     * @param array{
     *     skillMd?: UpdatedSkillMdDefinition|null,
     *     skillDefinition?: UpdatedSkillDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
