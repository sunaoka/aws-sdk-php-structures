<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectLegalHold;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property Shapes\ObjectLockLegalHold|null $LegalHold
 * @property 'requester'|null $RequestPayer
 * @property string|null $VersionId
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null $ChecksumAlgorithm
 * @property string|null $ExpectedBucketOwner
 */
class PutObjectLegalHoldRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     LegalHold?: Shapes\ObjectLockLegalHold|null,
     *     RequestPayer?: 'requester'|null,
     *     VersionId?: string|null,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
