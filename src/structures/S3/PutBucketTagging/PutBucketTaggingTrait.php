<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketTagging;

trait PutBucketTaggingTrait
{
    /**
     * @param PutBucketTaggingRequest $args
     * @return void
     */
    public function putBucketTagging(PutBucketTaggingRequest $args)
    {
        parent::putBucketTagging($args->toArray());
    }
}
