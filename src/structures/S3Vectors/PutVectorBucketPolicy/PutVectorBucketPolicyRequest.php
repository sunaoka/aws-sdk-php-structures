<?php

namespace Sunaoka\Aws\Structures\S3Vectors\PutVectorBucketPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $vectorBucketArn
 * @property string $policy
 */
class PutVectorBucketPolicyRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     vectorBucketArn?: string|null,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
