<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketWebsite;

trait GetBucketWebsiteTrait
{
    /**
     * @param GetBucketWebsiteRequest $args
     * @return GetBucketWebsiteResponse
     */
    public function getBucketWebsite(GetBucketWebsiteRequest $args)
    {
        $result = parent::getBucketWebsite($args->toArray());
        return new GetBucketWebsiteResponse($result->toArray());
    }
}
