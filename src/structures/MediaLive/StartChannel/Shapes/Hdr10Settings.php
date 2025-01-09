<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 32768> $MaxCll
 * @property int<0, 32768> $MaxFall
 */
class Hdr10Settings extends Shape
{
    /**
     * @param array{
     *     MaxCll?: int<0, 32768>,
     *     MaxFall?: int<0, 32768>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
