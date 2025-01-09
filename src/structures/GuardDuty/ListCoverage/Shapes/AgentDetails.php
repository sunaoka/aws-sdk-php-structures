<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 */
class AgentDetails extends Shape
{
    /**
     * @param array{Version?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
