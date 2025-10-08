<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode;

trait UpdateVirtualNodeTrait
{
    /**
     * @param UpdateVirtualNodeRequest $args
     * @return UpdateVirtualNodeResponse
     */
    public function updateVirtualNode(UpdateVirtualNodeRequest $args)
    {
        $result = parent::updateVirtualNode($args->toArray());
        return new UpdateVirtualNodeResponse($result->toArray());
    }
}
