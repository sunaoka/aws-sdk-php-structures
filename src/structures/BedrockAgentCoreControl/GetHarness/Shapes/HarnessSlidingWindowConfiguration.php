<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $messagesCount
 */
class HarnessSlidingWindowConfiguration extends Shape
{
    /**
     * @param array{messagesCount?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
