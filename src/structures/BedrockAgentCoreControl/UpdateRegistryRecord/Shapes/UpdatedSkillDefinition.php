<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SkillDefinition|null $optionalValue
 */
class UpdatedSkillDefinition extends Shape
{
    /**
     * @param array{optionalValue?: SkillDefinition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
