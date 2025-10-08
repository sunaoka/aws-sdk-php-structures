<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateMesh;

trait UpdateMeshTrait
{
    /**
     * @param UpdateMeshRequest $args
     * @return UpdateMeshResponse
     */
    public function updateMesh(UpdateMeshRequest $args)
    {
        $result = parent::updateMesh($args->toArray());
        return new UpdateMeshResponse($result->toArray());
    }
}
