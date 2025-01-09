<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property bool $ConfirmRemoveSelfBucketAccess
 * @property string $Policy
 * @property string $ExpectedBucketOwner
 */
class PutBucketPolicyRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContentMD5?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     ConfirmRemoveSelfBucketAccess?: bool,
     *     Policy: string,
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
