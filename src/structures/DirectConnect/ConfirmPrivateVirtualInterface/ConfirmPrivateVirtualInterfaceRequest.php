<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmPrivateVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property string|null $virtualGatewayId
 * @property string|null $directConnectGatewayId
 */
class ConfirmPrivateVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId: string,
     *     virtualGatewayId?: string|null,
     *     directConnectGatewayId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
