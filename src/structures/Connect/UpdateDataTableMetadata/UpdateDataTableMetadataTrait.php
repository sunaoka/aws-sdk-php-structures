<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateDataTableMetadata;

trait UpdateDataTableMetadataTrait
{
    /**
     * @param UpdateDataTableMetadataRequest $args
     * @return UpdateDataTableMetadataResponse
     */
    public function updateDataTableMetadata(UpdateDataTableMetadataRequest $args)
    {
        $result = parent::updateDataTableMetadata($args->toArray());
        return new UpdateDataTableMetadataResponse($result->toArray());
    }
}
