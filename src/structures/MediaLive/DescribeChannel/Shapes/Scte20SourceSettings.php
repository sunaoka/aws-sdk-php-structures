<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'UPCONVERT'|null $Convert608To708
 * @property int|null $Source608ChannelNumber
 */
class Scte20SourceSettings extends Shape
{
    /**
     * @param array{
     *     Convert608To708?: 'DISABLED'|'UPCONVERT'|null,
     *     Source608ChannelNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
