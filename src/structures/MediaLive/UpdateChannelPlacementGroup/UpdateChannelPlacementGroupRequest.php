<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelPlacementGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelPlacementGroupId
 * @property string $ClusterId
 * @property string $Name
 * @property list<string> $Nodes
 */
class UpdateChannelPlacementGroupRequest extends Request
{
    /**
     * @param array{
     *     ChannelPlacementGroupId: string,
     *     ClusterId: string,
     *     Name?: string,
     *     Nodes?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
