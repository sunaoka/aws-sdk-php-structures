<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmPrivateVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property string $virtualGatewayId
 * @property string $directConnectGatewayId
 */
class ConfirmPrivateVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId: string,
     *     virtualGatewayId?: string,
     *     directConnectGatewayId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
