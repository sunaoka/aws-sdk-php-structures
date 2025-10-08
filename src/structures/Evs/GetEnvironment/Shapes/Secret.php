<?php

namespace Sunaoka\Aws\Structures\Evs\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $secretArn
 */
class Secret extends Shape
{
    /**
     * @param array{secretArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
