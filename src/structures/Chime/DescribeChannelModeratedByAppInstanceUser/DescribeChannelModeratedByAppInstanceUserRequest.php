<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannelModeratedByAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $AppInstanceUserArn
 * @property string|null $ChimeBearer
 */
class DescribeChannelModeratedByAppInstanceUserRequest extends Request
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
