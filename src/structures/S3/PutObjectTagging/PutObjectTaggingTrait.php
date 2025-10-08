<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectTagging;

trait PutObjectTaggingTrait
{
    /**
     * @param PutObjectTaggingRequest $args
     * @return PutObjectTaggingResponse
     */
    public function putObjectTagging(PutObjectTaggingRequest $args)
    {
        $result = parent::putObjectTagging($args->toArray());
        return new PutObjectTaggingResponse($result->toArray());
    }
}
