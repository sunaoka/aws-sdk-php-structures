<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $meshName
 * @property string $meshOwner
 * @property Shapes\VirtualRouterSpec $spec
 * @property string $virtualRouterName
 */
class UpdateVirtualRouterRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     meshName: string,
     *     meshOwner?: string,
     *     spec: Shapes\VirtualRouterSpec,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
