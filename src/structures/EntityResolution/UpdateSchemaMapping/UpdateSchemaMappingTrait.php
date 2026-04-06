<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateSchemaMapping;

trait UpdateSchemaMappingTrait
{
    /**
     * @param UpdateSchemaMappingRequest $args
     * @return UpdateSchemaMappingResponse
     */
    public function updateSchemaMapping(UpdateSchemaMappingRequest $args)
    {
        $result = parent::updateSchemaMapping($args->toArray());
        return new UpdateSchemaMappingResponse($result->toArray());
    }
}
