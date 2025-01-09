<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $meshName
 * @property string $meshOwner
 * @property Shapes\VirtualGatewaySpec $spec
 * @property list<Shapes\TagRef> $tags
 * @property string $virtualGatewayName
 */
class CreateVirtualGatewayRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     meshName: string,
     *     meshOwner?: string,
     *     spec: Shapes\VirtualGatewaySpec,
     *     tags?: list<Shapes\TagRef>,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
