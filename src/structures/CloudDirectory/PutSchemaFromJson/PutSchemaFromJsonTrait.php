<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\PutSchemaFromJson;

trait PutSchemaFromJsonTrait
{
    /**
     * @param PutSchemaFromJsonRequest $args
     * @return PutSchemaFromJsonResponse
     */
    public function putSchemaFromJson(PutSchemaFromJsonRequest $args)
    {
        $result = parent::putSchemaFromJson($args->toArray());
        return new PutSchemaFromJsonResponse($result->toArray());
    }
}
