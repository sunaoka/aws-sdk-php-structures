<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateViewMetadata;

trait UpdateViewMetadataTrait
{
    /**
     * @param UpdateViewMetadataRequest $args
     * @return UpdateViewMetadataResponse
     */
    public function updateViewMetadata(UpdateViewMetadataRequest $args)
    {
        $result = parent::updateViewMetadata($args->toArray());
        return new UpdateViewMetadataResponse($result->toArray());
    }
}
