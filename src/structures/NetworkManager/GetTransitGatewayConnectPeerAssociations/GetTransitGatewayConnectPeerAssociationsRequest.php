<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayConnectPeerAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string> $TransitGatewayConnectPeerArns
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetTransitGatewayConnectPeerAssociationsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     TransitGatewayConnectPeerArns?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
