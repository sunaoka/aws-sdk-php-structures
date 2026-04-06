<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTableBucket;

trait DeleteTableBucketTrait
{
    /**
     * @param DeleteTableBucketRequest $args
     * @return void
     */
    public function deleteTableBucket(DeleteTableBucketRequest $args)
    {
        parent::deleteTableBucket($args->toArray());
    }
}
