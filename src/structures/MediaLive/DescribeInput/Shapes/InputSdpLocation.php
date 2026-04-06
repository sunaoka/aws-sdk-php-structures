<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MediaIndex
 * @property string|null $SdpUrl
 */
class InputSdpLocation extends Shape
{
    /**
     * @param array{
     *     MediaIndex?: int|null,
     *     SdpUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
