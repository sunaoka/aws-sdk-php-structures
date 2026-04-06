<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CardNumber
 * @property int|null $ChannelNumber
 * @property string|null $SdiSource
 */
class SdiSourceMapping extends Shape
{
    /**
     * @param array{
     *     CardNumber?: int|null,
     *     ChannelNumber?: int|null,
     *     SdiSource?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
