<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<8000, 12000> $from
 * @property int<8000, 12000> $to
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     from: int<8000, 12000>,
     *     to: int<8000, 12000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
