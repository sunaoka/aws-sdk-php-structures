<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $meshName
 * @property string|null $meshOwner
 * @property Shapes\VirtualGatewaySpec $spec
 * @property string $virtualGatewayName
 */
class UpdateVirtualGatewayRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     spec: Shapes\VirtualGatewaySpec,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
