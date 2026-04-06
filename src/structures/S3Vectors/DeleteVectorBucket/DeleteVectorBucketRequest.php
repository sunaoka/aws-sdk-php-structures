<?php

namespace Sunaoka\Aws\Structures\S3Vectors\DeleteVectorBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $vectorBucketArn
 */
class DeleteVectorBucketRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     vectorBucketArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
