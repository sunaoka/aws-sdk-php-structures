<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteMesh;

trait DeleteMeshTrait
{
    /**
     * @param DeleteMeshRequest $args
     * @return DeleteMeshResponse
     */
    public function deleteMesh(DeleteMeshRequest $args)
    {
        $result = parent::deleteMesh($args->toArray());
        return new DeleteMeshResponse($result->toArray());
    }
}
