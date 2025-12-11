<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 */
class McpServerTargetConfiguration extends Shape
{
    /**
     * @param array{endpoint: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
