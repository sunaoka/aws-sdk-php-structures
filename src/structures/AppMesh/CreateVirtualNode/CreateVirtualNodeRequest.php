<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $meshName
 * @property string|null $meshOwner
 * @property Shapes\VirtualNodeSpec $spec
 * @property list<Shapes\TagRef>|null $tags
 * @property string $virtualNodeName
 */
class CreateVirtualNodeRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     spec: Shapes\VirtualNodeSpec,
     *     tags?: list<Shapes\TagRef>|null,
     *     virtualNodeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
