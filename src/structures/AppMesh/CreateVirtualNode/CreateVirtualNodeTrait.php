<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode;

trait CreateVirtualNodeTrait
{
    /**
     * @param CreateVirtualNodeRequest $args
     * @return CreateVirtualNodeResponse
     */
    public function createVirtualNode(CreateVirtualNodeRequest $args)
    {
        $result = parent::createVirtualNode($args->toArray());
        return new CreateVirtualNodeResponse($result->toArray());
    }
}
