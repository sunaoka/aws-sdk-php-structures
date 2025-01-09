<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 */
class IpPool extends Shape
{
    /**
     * @param array{Cidr?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
