<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $meshName
 * @property string|null $meshOwner
 * @property Shapes\VirtualRouterSpec $spec
 * @property string $virtualRouterName
 */
class UpdateVirtualRouterRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     spec: Shapes\VirtualRouterSpec,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
