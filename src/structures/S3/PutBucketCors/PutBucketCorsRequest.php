<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketCors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property Shapes\CORSConfiguration $CORSConfiguration
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property string $ExpectedBucketOwner
 */
class PutBucketCorsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     CORSConfiguration: Shapes\CORSConfiguration,
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
