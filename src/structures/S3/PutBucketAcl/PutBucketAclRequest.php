<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAcl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|null $ACL
 * @property Shapes\AccessControlPolicy|null $AccessControlPolicy
 * @property string $Bucket
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null $ChecksumAlgorithm
 * @property string|null $GrantFullControl
 * @property string|null $GrantRead
 * @property string|null $GrantReadACP
 * @property string|null $GrantWrite
 * @property string|null $GrantWriteACP
 * @property string|null $ExpectedBucketOwner
 */
class PutBucketAclRequest extends Request
{
    /**
     * @param array{
     *     ACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|null,
     *     AccessControlPolicy?: Shapes\AccessControlPolicy|null,
     *     Bucket: string,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null,
     *     GrantFullControl?: string|null,
     *     GrantRead?: string|null,
     *     GrantReadACP?: string|null,
     *     GrantWrite?: string|null,
     *     GrantWriteACP?: string|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
