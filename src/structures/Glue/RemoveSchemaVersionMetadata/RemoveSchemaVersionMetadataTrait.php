<?php

namespace Sunaoka\Aws\Structures\Glue\RemoveSchemaVersionMetadata;

trait RemoveSchemaVersionMetadataTrait
{
    /**
     * @param RemoveSchemaVersionMetadataRequest $args
     * @return RemoveSchemaVersionMetadataResponse
     */
    public function removeSchemaVersionMetadata(RemoveSchemaVersionMetadataRequest $args)
    {
        $result = parent::removeSchemaVersionMetadata($args->toArray());
        return new RemoveSchemaVersionMetadataResponse($result->toArray());
    }
}
