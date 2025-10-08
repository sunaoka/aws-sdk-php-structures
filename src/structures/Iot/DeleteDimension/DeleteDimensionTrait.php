<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteDimension;

trait DeleteDimensionTrait
{
    /**
     * @param DeleteDimensionRequest $args
     * @return DeleteDimensionResponse
     */
    public function deleteDimension(DeleteDimensionRequest $args)
    {
        $result = parent::deleteDimension($args->toArray());
        return new DeleteDimensionResponse($result->toArray());
    }
}
