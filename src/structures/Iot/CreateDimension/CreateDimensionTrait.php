<?php

namespace Sunaoka\Aws\Structures\Iot\CreateDimension;

trait CreateDimensionTrait
{
    /**
     * @param CreateDimensionRequest $args
     * @return CreateDimensionResponse
     */
    public function createDimension(CreateDimensionRequest $args)
    {
        $result = parent::createDimension($args->toArray());
        return new CreateDimensionResponse($result->toArray());
    }
}
