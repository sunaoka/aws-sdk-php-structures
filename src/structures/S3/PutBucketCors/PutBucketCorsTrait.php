<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketCors;

trait PutBucketCorsTrait
{
    /**
     * @param PutBucketCorsRequest $args
     * @return void
     */
    public function putBucketCors(PutBucketCorsRequest $args)
    {
        parent::putBucketCors($args->toArray());
    }
}
