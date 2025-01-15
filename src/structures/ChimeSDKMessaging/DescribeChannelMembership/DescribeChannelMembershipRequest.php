<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MemberArn
 * @property string $ChimeBearer
 * @property string|null $SubChannelId
 */
class DescribeChannelMembershipRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MemberArn: string,
     *     ChimeBearer: string,
     *     SubChannelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
