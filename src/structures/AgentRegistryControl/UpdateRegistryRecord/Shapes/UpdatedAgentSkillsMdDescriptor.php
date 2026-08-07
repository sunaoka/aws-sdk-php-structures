<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedAgentSkillsMdDescriptorFields|null $optionalValue
 */
class UpdatedAgentSkillsMdDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedAgentSkillsMdDescriptorFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
