<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeMesh;

trait DescribeMeshTrait
{
    /**
     * @param DescribeMeshRequest $args
     * @return DescribeMeshResponse
     */
    public function describeMesh(DescribeMeshRequest $args)
    {
        $result = parent::describeMesh($args->toArray());
        return new DescribeMeshResponse($result->toArray());
    }
}
