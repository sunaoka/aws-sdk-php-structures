<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateCustomModel;

trait CreateCustomModelTrait
{
    /**
     * @param CreateCustomModelRequest $args
     * @return CreateCustomModelResponse
     */
    public function createCustomModel(CreateCustomModelRequest $args)
    {
        $result = parent::createCustomModel($args->toArray());
        return new CreateCustomModelResponse($result->toArray());
    }
}
