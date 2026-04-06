<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannelPlacementGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelPlacementGroupId
 * @property string $ClusterId
 */
class DeleteChannelPlacementGroupRequest extends Request
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
