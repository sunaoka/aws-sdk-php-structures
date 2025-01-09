<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectAcl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control' $ACL
 * @property Shapes\AccessControlPolicy $AccessControlPolicy
 * @property string $Bucket
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property string $GrantFullControl
 * @property string $GrantRead
 * @property string $GrantReadACP
 * @property string $GrantWrite
 * @property string $GrantWriteACP
 * @property string $Key
 * @property 'requester' $RequestPayer
 * @property string $VersionId
 * @property string $ExpectedBucketOwner
 */
class PutObjectAclRequest extends Request
{
    /**
     * @param array{
     *     ACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control',
     *     AccessControlPolicy?: Shapes\AccessControlPolicy,
     *     Bucket: string,
     *     ContentMD5?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     GrantFullControl?: string,
     *     GrantRead?: string,
     *     GrantReadACP?: string,
     *     GrantWrite?: string,
     *     GrantWriteACP?: string,
     *     Key: string,
     *     RequestPayer?: 'requester',
     *     VersionId?: string,
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
