<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\BatchCreateChannelMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property 'DEFAULT'|'HIDDEN' $Type
 * @property list<string> $MemberArns
 * @property string $ChimeBearer
 * @property string $SubChannelId
 */
class BatchCreateChannelMembershipRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Type?: 'DEFAULT'|'HIDDEN',
     *     MemberArns: list<string>,
     *     ChimeBearer: string,
     *     SubChannelId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
