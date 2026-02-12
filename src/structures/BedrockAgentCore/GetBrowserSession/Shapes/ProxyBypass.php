<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $domainPatterns
 */
class ProxyBypass extends Shape
{
    /**
     * @param array{domainPatterns?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
