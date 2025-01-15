<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayRegistrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string>|null $TransitGatewayArns
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetTransitGatewayRegistrationsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     TransitGatewayArns?: list<string>|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
