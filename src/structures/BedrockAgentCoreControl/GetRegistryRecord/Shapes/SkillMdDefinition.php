<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $inlineContent
 */
class SkillMdDefinition extends Shape
{
    /**
     * @param array{inlineContent?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
