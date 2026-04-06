<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannelPlacementGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelPlacementGroupId
 * @property string $ClusterId
 */
class DescribeChannelPlacementGroupRequest extends Request
{
    /**
     * @param array{
     *     ChannelPlacementGroupId: string,
     *     ClusterId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
