<?php

namespace Sunaoka\Aws\Structures\S3Tables\UpdateTableMetadataLocation;

trait UpdateTableMetadataLocationTrait
{
    /**
     * @param UpdateTableMetadataLocationRequest $args
     * @return UpdateTableMetadataLocationResponse
     */
    public function updateTableMetadataLocation(UpdateTableMetadataLocationRequest $args)
    {
        $result = parent::updateTableMetadataLocation($args->toArray());
        return new UpdateTableMetadataLocationResponse($result->toArray());
    }
}
