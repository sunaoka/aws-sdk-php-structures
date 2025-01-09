<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Bucket
 * @property bool $ConfirmRemoveSelfBucketAccess
 * @property string $Policy
 */
class PutBucketPolicyRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Bucket: string,
     *     ConfirmRemoveSelfBucketAccess?: bool,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
