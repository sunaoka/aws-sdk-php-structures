<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannelPlacementGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $Name
 * @property list<string> $Nodes
 * @property string $RequestId
 * @property array<string, string> $Tags
 */
class CreateChannelPlacementGroupRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Name?: string,
     *     Nodes?: list<string>,
     *     RequestId?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
