<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\RefreshSchemas;

trait RefreshSchemasTrait
{
    /**
     * @param RefreshSchemasRequest $args
     * @return RefreshSchemasResponse
     */
    public function refreshSchemas(RefreshSchemasRequest $args)
    {
        $result = parent::refreshSchemas($args->toArray());
        return new RefreshSchemasResponse($result->toArray());
    }
}
