<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateMesh;

trait CreateMeshTrait
{
    /**
     * @param CreateMeshRequest $args
     * @return CreateMeshResponse
     */
    public function createMesh(CreateMeshRequest $args)
    {
        $result = parent::createMesh($args->toArray());
        return new CreateMeshResponse($result->toArray());
    }
}
