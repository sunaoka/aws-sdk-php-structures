<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironmentHost\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $networkInterfaceId
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{networkInterfaceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
