<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCustomerGatewayAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string> $CustomerGatewayArns
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class GetCustomerGatewayAssociationsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     CustomerGatewayArns?: list<string>,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
