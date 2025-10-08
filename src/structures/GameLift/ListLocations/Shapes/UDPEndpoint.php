<?php

namespace Sunaoka\Aws\Structures\GameLift\ListLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property int<1, max>|null $Port
 */
class UDPEndpoint extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     Port?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
