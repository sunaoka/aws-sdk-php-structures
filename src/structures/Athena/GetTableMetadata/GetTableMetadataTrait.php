<?php

namespace Sunaoka\Aws\Structures\Athena\GetTableMetadata;

trait GetTableMetadataTrait
{
    /**
     * @param GetTableMetadataRequest $args
     * @return GetTableMetadataResponse
     */
    public function getTableMetadata(GetTableMetadataRequest $args)
    {
        $result = parent::getTableMetadata($args->toArray());
        return new GetTableMetadataResponse($result->toArray());
    }
}
