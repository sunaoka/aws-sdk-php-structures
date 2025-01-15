<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $meshName
 * @property string|null $meshOwner
 * @property Shapes\VirtualRouterSpec $spec
 * @property list<Shapes\TagRef>|null $tags
 * @property string $virtualRouterName
 */
class CreateVirtualRouterRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     spec: Shapes\VirtualRouterSpec,
     *     tags?: list<Shapes\TagRef>|null,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
