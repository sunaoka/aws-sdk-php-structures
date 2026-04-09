<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SkillMdDefinition|null $optionalValue
 */
class UpdatedSkillMdDefinition extends Shape
{
    /**
     * @param array{optionalValue?: SkillMdDefinition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
