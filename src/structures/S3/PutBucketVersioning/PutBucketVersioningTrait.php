<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketVersioning;

trait PutBucketVersioningTrait
{
    /**
     * @param PutBucketVersioningRequest $args
     * @return void
     */
    public function putBucketVersioning(PutBucketVersioningRequest $args)
    {
        parent::putBucketVersioning($args->toArray());
    }
}
