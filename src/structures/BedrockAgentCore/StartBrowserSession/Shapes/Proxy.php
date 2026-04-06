<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalProxy|null $externalProxy
 */
class Proxy extends Shape
{
    /**
     * @param array{externalProxy?: ExternalProxy|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
