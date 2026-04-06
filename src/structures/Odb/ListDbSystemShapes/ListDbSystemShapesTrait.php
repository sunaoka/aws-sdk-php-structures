<?php

namespace Sunaoka\Aws\Structures\Odb\ListDbSystemShapes;

trait ListDbSystemShapesTrait
{
    /**
     * @param ListDbSystemShapesRequest $args
     * @return ListDbSystemShapesResponse
     */
    public function listDbSystemShapes(ListDbSystemShapesRequest $args)
    {
        $result = parent::listDbSystemShapes($args->toArray());
        return new ListDbSystemShapesResponse($result->toArray());
    }
}
