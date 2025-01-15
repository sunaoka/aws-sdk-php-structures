<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMembershipsForAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AppInstanceUserArn
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property string $ChimeBearer
 */
class ListChannelMembershipsForAppInstanceUserRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
