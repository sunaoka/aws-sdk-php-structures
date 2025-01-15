<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property Shapes\Delete $Delete
 * @property string|null $MFA
 * @property 'requester'|null $RequestPayer
 * @property bool|null $BypassGovernanceRetention
 * @property string|null $ExpectedBucketOwner
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 */
class DeleteObjectsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Delete: Shapes\Delete,
     *     MFA?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     BypassGovernanceRetention?: bool|null,
     *     ExpectedBucketOwner?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
