<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $meshName
 * @property string|null $meshOwner
 * @property string $virtualNodeName
 */
class DeleteVirtualNodeRequest extends Request
{
    /**
     * @param array{
     *     meshName: string,
     *     meshOwner?: string|null,
     *     virtualNodeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
