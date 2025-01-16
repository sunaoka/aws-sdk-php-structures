<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectTagging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string|null $VersionId
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 * @property Shapes\Tagging $Tagging
 * @property string|null $ExpectedBucketOwner
 * @property 'requester'|null $RequestPayer
 */
class PutObjectTaggingRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string|null,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null,
     *     Tagging: Shapes\Tagging,
     *     ExpectedBucketOwner?: string|null,
     *     RequestPayer?: 'requester'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
