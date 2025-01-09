<?php

namespace Sunaoka\Aws\Structures\DataSync\ListAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 */
class Platform extends Shape
{
    /**
     * @param array{Version?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
