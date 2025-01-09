<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAccelerateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property Shapes\AccelerateConfiguration $AccelerateConfiguration
 * @property string $ExpectedBucketOwner
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 */
class PutBucketAccelerateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     AccelerateConfiguration: Shapes\AccelerateConfiguration,
     *     ExpectedBucketOwner?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
