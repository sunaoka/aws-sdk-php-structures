<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironment\Shapes;

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
