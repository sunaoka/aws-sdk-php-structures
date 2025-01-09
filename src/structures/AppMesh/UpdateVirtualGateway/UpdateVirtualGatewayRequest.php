<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $meshName
 * @property string $meshOwner
 * @property Shapes\VirtualGatewaySpec $spec
 * @property string $virtualGatewayName
 */
class UpdateVirtualGatewayRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     meshName: string,
     *     meshOwner?: string,
     *     spec: Shapes\VirtualGatewaySpec,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
