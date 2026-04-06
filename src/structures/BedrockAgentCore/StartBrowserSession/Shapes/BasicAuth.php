<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretArn
 */
class BasicAuth extends Shape
{
    /**
     * @param array{secretArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
