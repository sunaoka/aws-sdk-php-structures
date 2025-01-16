<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectRetention;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property Shapes\ObjectLockRetention|null $Retention
 * @property 'requester'|null $RequestPayer
 * @property string|null $VersionId
 * @property bool|null $BypassGovernanceRetention
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 * @property string|null $ExpectedBucketOwner
 */
class PutObjectRetentionRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     Retention?: Shapes\ObjectLockRetention|null,
     *     RequestPayer?: 'requester'|null,
     *     VersionId?: string|null,
     *     BypassGovernanceRetention?: bool|null,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
