<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayRegistrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string> $TransitGatewayArns
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class GetTransitGatewayRegistrationsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     TransitGatewayArns?: list<string>,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
