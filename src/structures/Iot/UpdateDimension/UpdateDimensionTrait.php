<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDimension;

trait UpdateDimensionTrait
{
    /**
     * @param UpdateDimensionRequest $args
     * @return UpdateDimensionResponse
     */
    public function updateDimension(UpdateDimensionRequest $args)
    {
        $result = parent::updateDimension($args->toArray());
        return new UpdateDimensionResponse($result->toArray());
    }
}
