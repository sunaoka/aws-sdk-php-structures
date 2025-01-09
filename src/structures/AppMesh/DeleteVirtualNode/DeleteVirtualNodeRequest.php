<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $meshName
 * @property string $meshOwner
 * @property string $virtualNodeName
 */
class DeleteVirtualNodeRequest extends Request
{
    /**
     * @param array{
     *     meshName: string,
     *     meshOwner?: string,
     *     virtualNodeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
