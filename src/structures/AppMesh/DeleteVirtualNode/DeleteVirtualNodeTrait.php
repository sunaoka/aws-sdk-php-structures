<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode;

trait DeleteVirtualNodeTrait
{
    /**
     * @param DeleteVirtualNodeRequest $args
     * @return DeleteVirtualNodeResponse
     */
    public function deleteVirtualNode(DeleteVirtualNodeRequest $args)
    {
        $result = parent::deleteVirtualNode($args->toArray());
        return new DeleteVirtualNodeResponse($result->toArray());
    }
}
