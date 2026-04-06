<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannelModerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity|null $Moderator
 * @property string|null $ChannelArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property Identity|null $CreatedBy
 */
class ChannelModerator extends Shape
{
    /**
     * @param array{
     *     Moderator?: Identity|null,
     *     ChannelArn?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: Identity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
