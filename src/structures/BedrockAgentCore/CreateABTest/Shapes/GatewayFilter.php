<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreateABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $targetPaths
 */
class GatewayFilter extends Shape
{
    /**
     * @param array{targetPaths?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
