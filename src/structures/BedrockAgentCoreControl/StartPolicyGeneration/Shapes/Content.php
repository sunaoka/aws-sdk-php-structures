<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\StartPolicyGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $rawText
 */
class Content extends Shape
{
    /**
     * @param array{rawText?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
