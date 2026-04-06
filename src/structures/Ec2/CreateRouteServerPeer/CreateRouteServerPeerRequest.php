<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteServerPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RouteServerEndpointId
 * @property string $PeerAddress
 * @property Shapes\RouteServerBgpOptionsRequest $BgpOptions
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateRouteServerPeerRequest extends Request
{
    /**
     * @param array{
     *     RouteServerEndpointId: string,
     *     PeerAddress: string,
     *     BgpOptions: Shapes\RouteServerBgpOptionsRequest,
     *     DryRun?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
