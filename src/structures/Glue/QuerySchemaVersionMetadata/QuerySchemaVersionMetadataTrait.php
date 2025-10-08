<?php

namespace Sunaoka\Aws\Structures\Glue\QuerySchemaVersionMetadata;

trait QuerySchemaVersionMetadataTrait
{
    /**
     * @param QuerySchemaVersionMetadataRequest $args
     * @return QuerySchemaVersionMetadataResponse
     */
    public function querySchemaVersionMetadata(QuerySchemaVersionMetadataRequest $args)
    {
        $result = parent::querySchemaVersionMetadata($args->toArray());
        return new QuerySchemaVersionMetadataResponse($result->toArray());
    }
}
