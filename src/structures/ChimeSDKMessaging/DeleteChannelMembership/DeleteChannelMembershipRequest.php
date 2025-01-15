<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteChannelMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MemberArn
 * @property string $ChimeBearer
 * @property string|null $SubChannelId
 */
class DeleteChannelMembershipRequest extends Request
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
