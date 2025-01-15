<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelBan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity|null $Member
 * @property string|null $ChannelArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property Identity|null $CreatedBy
 */
class ChannelBan extends Shape
{
    /**
     * @param array{
     *     Member?: Identity|null,
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
