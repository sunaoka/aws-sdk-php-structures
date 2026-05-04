<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<900, 28800>|null $sessionTimeoutInSeconds
 */
class SessionConfiguration extends Shape
{
    /**
     * @param array{sessionTimeoutInSeconds?: int<900, 28800>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
