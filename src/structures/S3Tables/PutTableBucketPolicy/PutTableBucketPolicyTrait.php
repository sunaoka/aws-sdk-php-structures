<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketPolicy;

trait PutTableBucketPolicyTrait
{
    /**
     * @param PutTableBucketPolicyRequest $args
     * @return void
     */
    public function putTableBucketPolicy(PutTableBucketPolicyRequest $args)
    {
        parent::putTableBucketPolicy($args->toArray());
    }
}
