<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAcl;

trait PutBucketAclTrait
{
    /**
     * @param PutBucketAclRequest $args
     * @return void
     */
    public function putBucketAcl(PutBucketAclRequest $args)
    {
        parent::putBucketAcl($args->toArray());
    }
}
