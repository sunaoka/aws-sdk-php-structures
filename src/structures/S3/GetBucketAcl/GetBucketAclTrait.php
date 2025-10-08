<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketAcl;

trait GetBucketAclTrait
{
    /**
     * @param GetBucketAclRequest $args
     * @return GetBucketAclResponse
     */
    public function getBucketAcl(GetBucketAclRequest $args)
    {
        $result = parent::getBucketAcl($args->toArray());
        return new GetBucketAclResponse($result->toArray());
    }
}
