<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLogging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property Shapes\BucketLoggingStatus $BucketLoggingStatus
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property string $ExpectedBucketOwner
 */
class PutBucketLoggingRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     BucketLoggingStatus: Shapes\BucketLoggingStatus,
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
