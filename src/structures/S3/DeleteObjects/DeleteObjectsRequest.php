<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property Shapes\Delete $Delete
 * @property string $MFA
 * @property 'requester' $RequestPayer
 * @property bool $BypassGovernanceRetention
 * @property string $ExpectedBucketOwner
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 */
class DeleteObjectsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Delete: Shapes\Delete,
     *     MFA?: string,
     *     RequestPayer?: 'requester',
     *     BypassGovernanceRetention?: bool,
     *     ExpectedBucketOwner?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
