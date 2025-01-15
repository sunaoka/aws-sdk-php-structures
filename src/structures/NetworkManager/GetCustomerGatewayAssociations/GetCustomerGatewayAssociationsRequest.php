<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCustomerGatewayAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string>|null $CustomerGatewayArns
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetCustomerGatewayAssociationsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     CustomerGatewayArns?: list<string>|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
