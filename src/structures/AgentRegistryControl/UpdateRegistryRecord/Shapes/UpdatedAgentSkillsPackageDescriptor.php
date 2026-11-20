<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentSkillsPackageDescriptor|null $optionalValue
 */
class UpdatedAgentSkillsPackageDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: AgentSkillsPackageDescriptor|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
