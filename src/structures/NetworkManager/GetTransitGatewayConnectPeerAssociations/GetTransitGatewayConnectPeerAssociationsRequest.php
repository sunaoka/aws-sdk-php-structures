<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayConnectPeerAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string>|null $TransitGatewayConnectPeerArns
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetTransitGatewayConnectPeerAssociationsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     TransitGatewayConnectPeerArns?: list<string>|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
