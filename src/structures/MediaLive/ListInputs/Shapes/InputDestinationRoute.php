<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property string|null $Gateway
 */
class InputDestinationRoute extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     Gateway?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
