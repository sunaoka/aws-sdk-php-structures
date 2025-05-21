<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteServerPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RouteServerPeerId
 * @property bool|null $DryRun
 */
class DeleteRouteServerPeerRequest extends Request
{
    /**
     * @param array{
     *     RouteServerPeerId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
