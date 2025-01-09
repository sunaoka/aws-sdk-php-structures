<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $VersionId
 * @property Shapes\RestoreRequest $RestoreRequest
 * @property 'requester' $RequestPayer
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property string $ExpectedBucketOwner
 */
class RestoreObjectRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string,
     *     RestoreRequest?: Shapes\RestoreRequest,
     *     RequestPayer?: 'requester',
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
