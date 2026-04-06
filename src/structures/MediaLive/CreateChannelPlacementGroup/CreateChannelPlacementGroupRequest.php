<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannelPlacementGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string|null $Name
 * @property list<string>|null $Nodes
 * @property string|null $RequestId
 * @property array<string, string>|null $Tags
 */
class CreateChannelPlacementGroupRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Name?: string|null,
     *     Nodes?: list<string>|null,
     *     RequestId?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
