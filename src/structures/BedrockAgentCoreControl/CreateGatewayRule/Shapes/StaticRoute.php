<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetName
 */
class StaticRoute extends Shape
{
    /**
     * @param array{targetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
