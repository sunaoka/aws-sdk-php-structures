<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCustomerGatewayAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string> $CustomerGatewayArns
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetCustomerGatewayAssociationsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     CustomerGatewayArns?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
