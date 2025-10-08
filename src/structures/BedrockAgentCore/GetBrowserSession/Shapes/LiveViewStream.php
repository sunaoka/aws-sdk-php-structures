<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $streamEndpoint
 */
class LiveViewStream extends Shape
{
    /**
     * @param array{streamEndpoint?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
