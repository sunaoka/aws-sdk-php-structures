<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateSchemaMapping;

trait CreateSchemaMappingTrait
{
    /**
     * @param CreateSchemaMappingRequest $args
     * @return CreateSchemaMappingResponse
     */
    public function createSchemaMapping(CreateSchemaMappingRequest $args)
    {
        $result = parent::createSchemaMapping($args->toArray());
        return new CreateSchemaMappingResponse($result->toArray());
    }
}
