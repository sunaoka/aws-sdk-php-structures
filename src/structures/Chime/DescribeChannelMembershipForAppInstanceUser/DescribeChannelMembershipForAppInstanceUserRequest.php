<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannelMembershipForAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $AppInstanceUserArn
 * @property string|null $ChimeBearer
 */
class DescribeChannelMembershipForAppInstanceUserRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     AppInstanceUserArn: string,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
