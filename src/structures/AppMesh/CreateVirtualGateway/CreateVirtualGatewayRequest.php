<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $meshName
 * @property string|null $meshOwner
 * @property Shapes\VirtualGatewaySpec $spec
 * @property list<Shapes\TagRef>|null $tags
 * @property string $virtualGatewayName
 */
class CreateVirtualGatewayRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     spec: Shapes\VirtualGatewaySpec,
     *     tags?: list<Shapes\TagRef>|null,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
