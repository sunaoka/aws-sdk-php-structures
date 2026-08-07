<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedAgentSkillsDefinitionDescriptorFields|null $optionalValue
 */
class UpdatedAgentSkillsDefinitionDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedAgentSkillsDefinitionDescriptorFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
