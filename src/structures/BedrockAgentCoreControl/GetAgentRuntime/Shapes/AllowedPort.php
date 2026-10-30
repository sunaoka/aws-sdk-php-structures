<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<8000, 12000>|null $port
 * @property PortRange|null $portRange
 */
class AllowedPort extends Shape
{
    /**
     * @param array{
     *     port?: int<8000, 12000>|null,
     *     portRange?: PortRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
