<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAbac;

trait PutBucketAbacTrait
{
    /**
     * @param PutBucketAbacRequest $args
     * @return void
     */
    public function putBucketAbac(PutBucketAbacRequest $args)
    {
        parent::putBucketAbac($args->toArray());
    }
}
