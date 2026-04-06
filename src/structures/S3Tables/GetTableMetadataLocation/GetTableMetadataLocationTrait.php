<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMetadataLocation;

trait GetTableMetadataLocationTrait
{
    /**
     * @param GetTableMetadataLocationRequest $args
     * @return GetTableMetadataLocationResponse
     */
    public function getTableMetadataLocation(GetTableMetadataLocationRequest $args)
    {
        $result = parent::getTableMetadataLocation($args->toArray());
        return new GetTableMetadataLocationResponse($result->toArray());
    }
}
