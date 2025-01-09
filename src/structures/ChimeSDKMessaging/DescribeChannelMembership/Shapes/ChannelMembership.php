<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity $InvitedBy
 * @property 'DEFAULT'|'HIDDEN' $Type
 * @property Identity $Member
 * @property string $ChannelArn
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property string $SubChannelId
 */
class ChannelMembership extends Shape
{
    /**
     * @param array{
     *     InvitedBy?: Identity,
     *     Type?: 'DEFAULT'|'HIDDEN',
     *     Member?: Identity,
     *     ChannelArn?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     SubChannelId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
