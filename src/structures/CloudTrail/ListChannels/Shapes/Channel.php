<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelArn
 * @property string $Name
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     ChannelArn?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
