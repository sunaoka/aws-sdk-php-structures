<?php

namespace Sunaoka\Aws\Structures\EntityResolution\DeleteSchemaMapping;

trait DeleteSchemaMappingTrait
{
    /**
     * @param DeleteSchemaMappingRequest $args
     * @return DeleteSchemaMappingResponse
     */
    public function deleteSchemaMapping(DeleteSchemaMappingRequest $args)
    {
        $result = parent::deleteSchemaMapping($args->toArray());
        return new DeleteSchemaMappingResponse($result->toArray());
    }
}
