<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $anyOf
 */
class MatchPaths extends Shape
{
    /**
     * @param array{anyOf: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
