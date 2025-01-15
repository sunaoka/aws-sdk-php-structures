<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLogging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property Shapes\BucketLoggingStatus $BucketLoggingStatus
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 * @property string|null $ExpectedBucketOwner
 */
class PutBucketLoggingRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     BucketLoggingStatus: Shapes\BucketLoggingStatus,
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
