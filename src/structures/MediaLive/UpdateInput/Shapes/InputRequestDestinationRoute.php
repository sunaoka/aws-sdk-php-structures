<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property string $Gateway
 */
class InputRequestDestinationRoute extends Shape
{
    /**
     * @param array{
     *     Cidr?: string,
     *     Gateway?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
