<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelArn
 * @property string|null $Name
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     ChannelArn?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
