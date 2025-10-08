<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetModel;

trait GetModelTrait
{
    /**
     * @param GetModelRequest $args
     * @return GetModelResponse
     */
    public function getModel(GetModelRequest $args)
    {
        $result = parent::getModel($args->toArray());
        return new GetModelResponse($result->toArray());
    }
}
