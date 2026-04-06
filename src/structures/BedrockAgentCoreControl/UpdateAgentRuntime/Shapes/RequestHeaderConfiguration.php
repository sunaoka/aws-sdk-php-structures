<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $requestHeaderAllowlist
 */
class RequestHeaderConfiguration extends Shape
{
    /**
     * @param array{requestHeaderAllowlist?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
