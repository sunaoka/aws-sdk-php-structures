<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListServiceVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Version
 */
class ServiceVersion extends Shape
{
    /**
     * @param array{Version?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
