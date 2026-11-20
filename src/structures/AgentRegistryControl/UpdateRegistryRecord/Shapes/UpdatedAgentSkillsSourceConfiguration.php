<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentSkillsSourceConfiguration|null $optionalValue
 */
class UpdatedAgentSkillsSourceConfiguration extends Shape
{
    /**
     * @param array{optionalValue?: AgentSkillsSourceConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
