<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketPolicyStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ExpectedBucketOwner
 */
class GetBucketPolicyStatusRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
