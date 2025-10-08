<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectTagging;

trait GetObjectTaggingTrait
{
    /**
     * @param GetObjectTaggingRequest $args
     * @return GetObjectTaggingResponse
     */
    public function getObjectTagging(GetObjectTaggingRequest $args)
    {
        $result = parent::getObjectTagging($args->toArray());
        return new GetObjectTaggingResponse($result->toArray());
    }
}
