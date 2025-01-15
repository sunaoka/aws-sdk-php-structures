<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannelMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MemberArn
 * @property 'DEFAULT'|'HIDDEN' $Type
 * @property string $ChimeBearer
 * @property string|null $SubChannelId
 */
class CreateChannelMembershipRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MemberArn: string,
     *     Type: 'DEFAULT'|'HIDDEN',
     *     ChimeBearer: string,
     *     SubChannelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
