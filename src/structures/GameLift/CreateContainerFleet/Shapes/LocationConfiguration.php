<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Location
 */
class LocationConfiguration extends Shape
{
    /**
     * @param array{Location: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
