<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListMeshes;

trait ListMeshesTrait
{
    /**
     * @param ListMeshesRequest $args
     * @return ListMeshesResponse
     */
    public function listMeshes(ListMeshesRequest $args)
    {
        $result = parent::listMeshes($args->toArray());
        return new ListMeshesResponse($result->toArray());
    }
}
