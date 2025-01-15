<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 32768>|null $MaxCll
 * @property int<0, 32768>|null $MaxFall
 */
class Hdr10Settings extends Shape
{
    /**
     * @param array{
     *     MaxCll?: int<0, 32768>|null,
     *     MaxFall?: int<0, 32768>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
