<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelsModeratedByAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 * @property string $ChimeBearer
 */
class ListChannelsModeratedByAppInstanceUserRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
