<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedAgentSkillsMdDescriptor|null $skillMd
 */
class UpdatedAgentSkillsAdditionalDataFields extends Shape
{
    /**
     * @param array{skillMd?: UpdatedAgentSkillsMdDescriptor|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
