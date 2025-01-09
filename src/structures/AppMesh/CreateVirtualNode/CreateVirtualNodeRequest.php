<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $meshName
 * @property string $meshOwner
 * @property Shapes\VirtualNodeSpec $spec
 * @property list<Shapes\TagRef> $tags
 * @property string $virtualNodeName
 */
class CreateVirtualNodeRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     meshName: string,
     *     meshOwner?: string,
     *     spec: Shapes\VirtualNodeSpec,
     *     tags?: list<Shapes\TagRef>,
     *     virtualNodeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
