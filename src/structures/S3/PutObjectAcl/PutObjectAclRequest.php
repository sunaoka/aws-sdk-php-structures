<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectAcl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null $ACL
 * @property Shapes\AccessControlPolicy|null $AccessControlPolicy
 * @property string $Bucket
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 * @property string|null $GrantFullControl
 * @property string|null $GrantRead
 * @property string|null $GrantReadACP
 * @property string|null $GrantWrite
 * @property string|null $GrantWriteACP
 * @property string $Key
 * @property 'requester'|null $RequestPayer
 * @property string|null $VersionId
 * @property string|null $ExpectedBucketOwner
 */
class PutObjectAclRequest extends Request
{
    /**
     * @param array{
     *     ACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null,
     *     AccessControlPolicy?: Shapes\AccessControlPolicy|null,
     *     Bucket: string,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null,
     *     GrantFullControl?: string|null,
     *     GrantRead?: string|null,
     *     GrantReadACP?: string|null,
     *     GrantWrite?: string|null,
     *     GrantWriteACP?: string|null,
     *     Key: string,
     *     RequestPayer?: 'requester'|null,
     *     VersionId?: string|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
