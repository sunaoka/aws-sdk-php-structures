<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateChannelMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property 'DEFAULT'|'HIDDEN'|null $Type
 * @property list<string> $MemberArns
 * @property string|null $ChimeBearer
 */
class BatchCreateChannelMembershipRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     Type?: 'DEFAULT'|'HIDDEN'|null,
     *     MemberArns: list<string>,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
