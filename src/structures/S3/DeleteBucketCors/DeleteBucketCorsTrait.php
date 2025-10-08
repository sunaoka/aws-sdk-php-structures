<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketCors;

trait DeleteBucketCorsTrait
{
    /**
     * @param DeleteBucketCorsRequest $args
     * @return void
     */
    public function deleteBucketCors(DeleteBucketCorsRequest $args)
    {
        parent::deleteBucketCors($args->toArray());
    }
}
