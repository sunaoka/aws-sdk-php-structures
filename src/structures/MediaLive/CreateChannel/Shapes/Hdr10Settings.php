<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxCll
 * @property int $MaxFall
 */
class Hdr10Settings extends Shape
{
    /**
     * @param array{
     *     MaxCll?: int,
     *     MaxFall?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
