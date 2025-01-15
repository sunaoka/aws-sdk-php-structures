<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelPlacementGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelPlacementGroupId
 * @property string $ClusterId
 * @property string|null $Name
 * @property list<string>|null $Nodes
 */
class UpdateChannelPlacementGroupRequest extends Request
{
    /**
     * @param array{
     *     ChannelPlacementGroupId: string,
     *     ClusterId: string,
     *     Name?: string|null,
     *     Nodes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
