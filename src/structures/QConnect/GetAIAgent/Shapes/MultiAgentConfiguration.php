<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DelegateAgentConfiguration|null $delegateAgentConfiguration
 * @property HandoffAgentConfiguration|null $handoffAgentConfiguration
 */
class MultiAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     delegateAgentConfiguration?: DelegateAgentConfiguration|null,
     *     handoffAgentConfiguration?: HandoffAgentConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
