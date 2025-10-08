<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjectTagging;

trait DeleteObjectTaggingTrait
{
    /**
     * @param DeleteObjectTaggingRequest $args
     * @return DeleteObjectTaggingResponse
     */
    public function deleteObjectTagging(DeleteObjectTaggingRequest $args)
    {
        $result = parent::deleteObjectTagging($args->toArray());
        return new DeleteObjectTaggingResponse($result->toArray());
    }
}
