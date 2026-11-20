<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GITHUB'|null $optionalValue
 */
class UpdatedAgentSkillsRepositoryProvider extends Shape
{
    /**
     * @param array{optionalValue?: 'GITHUB'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
