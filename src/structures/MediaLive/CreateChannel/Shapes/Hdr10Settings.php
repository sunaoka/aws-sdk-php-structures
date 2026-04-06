<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxCll
 * @property int|null $MaxFall
 */
class Hdr10Settings extends Shape
{
    /**
     * @param array{
     *     MaxCll?: int|null,
     *     MaxFall?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
