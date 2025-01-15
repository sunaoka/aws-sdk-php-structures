<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketCors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property Shapes\CORSConfiguration $CORSConfiguration
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null $ChecksumAlgorithm
 * @property string|null $ExpectedBucketOwner
 */
class PutBucketCorsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     CORSConfiguration: Shapes\CORSConfiguration,
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
