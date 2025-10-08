<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetModels;

trait GetModelsTrait
{
    /**
     * @param GetModelsRequest $args
     * @return GetModelsResponse
     */
    public function getModels(GetModelsRequest $args)
    {
        $result = parent::getModels($args->toArray());
        return new GetModelsResponse($result->toArray());
    }
}
