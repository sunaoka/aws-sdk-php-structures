<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQAppSessionMetadata;

trait UpdateQAppSessionMetadataTrait
{
    /**
     * @param UpdateQAppSessionMetadataRequest $args
     * @return UpdateQAppSessionMetadataResponse
     */
    public function updateQAppSessionMetadata(UpdateQAppSessionMetadataRequest $args)
    {
        $result = parent::updateQAppSessionMetadata($args->toArray());
        return new UpdateQAppSessionMetadataResponse($result->toArray());
    }
}
