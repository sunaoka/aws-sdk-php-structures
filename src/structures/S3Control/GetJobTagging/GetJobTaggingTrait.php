<?php

namespace Sunaoka\Aws\Structures\S3Control\GetJobTagging;

trait GetJobTaggingTrait
{
    /**
     * @param GetJobTaggingRequest $args
     * @return GetJobTaggingResponse
     */
    public function getJobTagging(GetJobTaggingRequest $args)
    {
        $result = parent::getJobTagging($args->toArray());
        return new GetJobTaggingResponse($result->toArray());
    }
}
