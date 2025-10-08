<?php

namespace Sunaoka\Aws\Structures\Glue\PutSchemaVersionMetadata;

trait PutSchemaVersionMetadataTrait
{
    /**
     * @param PutSchemaVersionMetadataRequest $args
     * @return PutSchemaVersionMetadataResponse
     */
    public function putSchemaVersionMetadata(PutSchemaVersionMetadataRequest $args)
    {
        $result = parent::putSchemaVersionMetadata($args->toArray());
        return new PutSchemaVersionMetadataResponse($result->toArray());
    }
}
