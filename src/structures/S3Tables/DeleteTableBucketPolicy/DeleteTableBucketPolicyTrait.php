<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTableBucketPolicy;

trait DeleteTableBucketPolicyTrait
{
    /**
     * @param DeleteTableBucketPolicyRequest $args
     * @return void
     */
    public function deleteTableBucketPolicy(DeleteTableBucketPolicyRequest $args)
    {
        parent::deleteTableBucketPolicy($args->toArray());
    }
}
