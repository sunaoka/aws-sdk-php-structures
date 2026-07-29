<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetStreamUrl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Resolution|null $Resolution
 */
class DisplayConfiguration extends Shape
{
    /**
     * @param array{Resolution?: Resolution|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
