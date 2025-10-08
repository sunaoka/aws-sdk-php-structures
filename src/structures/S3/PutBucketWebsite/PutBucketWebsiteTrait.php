<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketWebsite;

trait PutBucketWebsiteTrait
{
    /**
     * @param PutBucketWebsiteRequest $args
     * @return void
     */
    public function putBucketWebsite(PutBucketWebsiteRequest $args)
    {
        parent::putBucketWebsite($args->toArray());
    }
}
