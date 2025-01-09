<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayConnectPeerId
 * @property bool $DryRun
 */
class DeleteTransitGatewayConnectPeerRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayConnectPeerId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
