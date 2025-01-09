<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DisassociateCustomerGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $CustomerGatewayArn
 */
class DisassociateCustomerGatewayRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     CustomerGatewayArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
