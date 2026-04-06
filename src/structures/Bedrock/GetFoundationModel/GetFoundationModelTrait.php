<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetFoundationModel;

trait GetFoundationModelTrait
{
    /**
     * @param GetFoundationModelRequest $args
     * @return GetFoundationModelResponse
     */
    public function getFoundationModel(GetFoundationModelRequest $args)
    {
        $result = parent::getFoundationModel($args->toArray());
        return new GetFoundationModelResponse($result->toArray());
    }
}
