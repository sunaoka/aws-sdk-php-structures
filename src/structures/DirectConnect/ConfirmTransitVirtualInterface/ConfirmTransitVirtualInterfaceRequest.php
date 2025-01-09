<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmTransitVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property string $directConnectGatewayId
 */
class ConfirmTransitVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId: string,
     *     directConnectGatewayId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
