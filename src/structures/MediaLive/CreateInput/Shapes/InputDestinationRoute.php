<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property string $Gateway
 */
class InputDestinationRoute extends Shape
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
