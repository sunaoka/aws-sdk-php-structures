<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteSchemaVersions;

trait DeleteSchemaVersionsTrait
{
    /**
     * @param DeleteSchemaVersionsRequest $args
     * @return DeleteSchemaVersionsResponse
     */
    public function deleteSchemaVersions(DeleteSchemaVersionsRequest $args)
    {
        $result = parent::deleteSchemaVersions($args->toArray());
        return new DeleteSchemaVersionsResponse($result->toArray());
    }
}
