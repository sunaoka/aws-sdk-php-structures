<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectRetention;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property Shapes\ObjectLockRetention $Retention
 * @property 'requester' $RequestPayer
 * @property string $VersionId
 * @property bool $BypassGovernanceRetention
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property string $ExpectedBucketOwner
 */
class PutObjectRetentionRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     Retention?: Shapes\ObjectLockRetention,
     *     RequestPayer?: 'requester',
     *     VersionId?: string,
     *     BypassGovernanceRetention?: bool,
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
