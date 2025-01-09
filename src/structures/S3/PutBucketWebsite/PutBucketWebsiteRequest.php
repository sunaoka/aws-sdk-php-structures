<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketWebsite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property Shapes\WebsiteConfiguration $WebsiteConfiguration
 * @property string $ExpectedBucketOwner
 */
class PutBucketWebsiteRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContentMD5?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     WebsiteConfiguration: Shapes\WebsiteConfiguration,
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
