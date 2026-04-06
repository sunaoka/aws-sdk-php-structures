<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetVectorBucketPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $vectorBucketArn
 */
class GetVectorBucketPolicyRequest extends Request
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
