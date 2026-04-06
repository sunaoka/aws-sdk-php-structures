<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketOwnershipControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $ContentMD5
 * @property string|null $ExpectedBucketOwner
 * @property Shapes\OwnershipControls $OwnershipControls
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 */
class PutBucketOwnershipControlsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContentMD5?: string|null,
     *     ExpectedBucketOwner?: string|null,
     *     OwnershipControls: Shapes\OwnershipControls,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
