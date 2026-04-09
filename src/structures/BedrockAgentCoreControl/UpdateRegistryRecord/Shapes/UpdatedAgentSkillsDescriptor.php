<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedAgentSkillsDescriptorFields|null $optionalValue
 */
class UpdatedAgentSkillsDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedAgentSkillsDescriptorFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
