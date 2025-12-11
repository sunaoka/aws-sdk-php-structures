<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 */
class ResourceShape extends Shape
{
    /**
     * @param array{arn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
