<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectLegalHold;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property Shapes\ObjectLockLegalHold $LegalHold
 * @property 'requester' $RequestPayer
 * @property string $VersionId
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property string $ExpectedBucketOwner
 */
class PutObjectLegalHoldRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     LegalHold?: Shapes\ObjectLockLegalHold,
     *     RequestPayer?: 'requester',
     *     VersionId?: string,
     *     ContentMD5?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
