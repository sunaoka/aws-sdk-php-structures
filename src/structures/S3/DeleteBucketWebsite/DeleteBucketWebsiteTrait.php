<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketWebsite;

trait DeleteBucketWebsiteTrait
{
    /**
     * @param DeleteBucketWebsiteRequest $args
     * @return void
     */
    public function deleteBucketWebsite(DeleteBucketWebsiteRequest $args)
    {
        parent::deleteBucketWebsite($args->toArray());
    }
}
