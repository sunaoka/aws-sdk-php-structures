<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\BatchCreateChannelMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property 'DEFAULT'|'HIDDEN'|null $Type
 * @property list<string> $MemberArns
 * @property string $ChimeBearer
 * @property string|null $SubChannelId
 */
class BatchCreateChannelMembershipRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Type?: 'DEFAULT'|'HIDDEN'|null,
     *     MemberArns: list<string>,
     *     ChimeBearer: string,
     *     SubChannelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
