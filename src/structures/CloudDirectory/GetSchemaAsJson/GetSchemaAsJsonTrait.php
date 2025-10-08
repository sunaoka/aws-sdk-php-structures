<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetSchemaAsJson;

trait GetSchemaAsJsonTrait
{
    /**
     * @param GetSchemaAsJsonRequest $args
     * @return GetSchemaAsJsonResponse
     */
    public function getSchemaAsJson(GetSchemaAsJsonRequest $args)
    {
        $result = parent::getSchemaAsJson($args->toArray());
        return new GetSchemaAsJsonResponse($result->toArray());
    }
}
