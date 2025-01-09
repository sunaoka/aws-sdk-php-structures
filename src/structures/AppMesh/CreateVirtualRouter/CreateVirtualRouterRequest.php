<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $meshName
 * @property string $meshOwner
 * @property Shapes\VirtualRouterSpec $spec
 * @property list<Shapes\TagRef> $tags
 * @property string $virtualRouterName
 */
class CreateVirtualRouterRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     meshName: string,
     *     meshOwner?: string,
     *     spec: Shapes\VirtualRouterSpec,
     *     tags?: list<Shapes\TagRef>,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
