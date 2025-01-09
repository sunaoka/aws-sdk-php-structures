<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannelModerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity $Moderator
 * @property string $ChannelArn
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property Identity $CreatedBy
 */
class ChannelModerator extends Shape
{
    /**
     * @param array{
     *     Moderator?: Identity,
     *     ChannelArn?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: Identity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
