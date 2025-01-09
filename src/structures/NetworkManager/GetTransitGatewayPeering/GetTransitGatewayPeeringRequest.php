<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayPeering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PeeringId
 */
class GetTransitGatewayPeeringRequest extends Request
{
    /**
     * @param array{PeeringId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
