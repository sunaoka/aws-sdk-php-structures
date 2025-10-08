<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteJobTagging;

trait DeleteJobTaggingTrait
{
    /**
     * @param DeleteJobTaggingRequest $args
     * @return DeleteJobTaggingResponse
     */
    public function deleteJobTagging(DeleteJobTaggingRequest $args)
    {
        $result = parent::deleteJobTagging($args->toArray());
        return new DeleteJobTaggingResponse($result->toArray());
    }
}
