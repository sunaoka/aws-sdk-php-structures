<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMembershipsForAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ChimeBearer
 */
class ListChannelMembershipsForAppInstanceUserRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
