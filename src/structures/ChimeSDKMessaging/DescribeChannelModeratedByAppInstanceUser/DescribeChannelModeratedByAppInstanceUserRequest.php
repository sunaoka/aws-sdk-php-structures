<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelModeratedByAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $AppInstanceUserArn
 * @property string $ChimeBearer
 */
class DescribeChannelModeratedByAppInstanceUserRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     AppInstanceUserArn: string,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
