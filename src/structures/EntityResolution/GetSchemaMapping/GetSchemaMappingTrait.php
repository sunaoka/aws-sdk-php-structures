<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetSchemaMapping;

trait GetSchemaMappingTrait
{
    /**
     * @param GetSchemaMappingRequest $args
     * @return GetSchemaMappingResponse
     */
    public function getSchemaMapping(GetSchemaMappingRequest $args)
    {
        $result = parent::getSchemaMapping($args->toArray());
        return new GetSchemaMappingResponse($result->toArray());
    }
}
