<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BasicAuth|null $basicAuth
 */
class ProxyCredentials extends Shape
{
    /**
     * @param array{basicAuth?: BasicAuth|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
