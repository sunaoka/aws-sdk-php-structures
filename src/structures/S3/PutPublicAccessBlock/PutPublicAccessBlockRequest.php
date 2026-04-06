<?php

namespace Sunaoka\Aws\Structures\S3\PutPublicAccessBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 * @property Shapes\PublicAccessBlockConfiguration $PublicAccessBlockConfiguration
 * @property string|null $ExpectedBucketOwner
 */
class PutPublicAccessBlockRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null,
     *     PublicAccessBlockConfiguration: Shapes\PublicAccessBlockConfiguration,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
