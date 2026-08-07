<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedAgentSkillsAdditionalDataFields|null $optionalValue
 */
class UpdatedAgentSkillsAdditionalData extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedAgentSkillsAdditionalDataFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
