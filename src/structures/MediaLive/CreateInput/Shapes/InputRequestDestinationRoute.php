<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property string|null $Gateway
 */
class InputRequestDestinationRoute extends Shape
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
