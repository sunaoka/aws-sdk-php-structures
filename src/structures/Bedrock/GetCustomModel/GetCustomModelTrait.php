<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel;

trait GetCustomModelTrait
{
    /**
     * @param GetCustomModelRequest $args
     * @return GetCustomModelResponse
     */
    public function getCustomModel(GetCustomModelRequest $args)
    {
        $result = parent::getCustomModel($args->toArray());
        return new GetCustomModelResponse($result->toArray());
    }
}
