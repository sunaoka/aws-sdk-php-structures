<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateModel;

trait UpdateModelTrait
{
    /**
     * @param UpdateModelRequest $args
     * @return UpdateModelResponse
     */
    public function updateModel(UpdateModelRequest $args)
    {
        $result = parent::updateModel($args->toArray());
        return new UpdateModelResponse($result->toArray());
    }
}
