<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateTransitGatewayPeering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $TransitGatewayArn
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class CreateTransitGatewayPeeringRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     TransitGatewayArn: string,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
