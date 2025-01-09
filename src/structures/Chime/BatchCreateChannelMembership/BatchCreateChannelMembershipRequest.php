<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateChannelMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property 'DEFAULT'|'HIDDEN' $Type
 * @property list<string> $MemberArns
 * @property string $ChimeBearer
 */
class BatchCreateChannelMembershipRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Type?: 'DEFAULT'|'HIDDEN',
     *     MemberArns: list<string>,
     *     ChimeBearer?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
