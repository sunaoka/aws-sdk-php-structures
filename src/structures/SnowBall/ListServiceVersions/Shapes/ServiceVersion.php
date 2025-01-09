<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListServiceVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 */
class ServiceVersion extends Shape
{
    /**
     * @param array{Version?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
