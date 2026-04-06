<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string|null $VersionId
 * @property Shapes\RestoreRequest|null $RestoreRequest
 * @property 'requester'|null $RequestPayer
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null $ChecksumAlgorithm
 * @property string|null $ExpectedBucketOwner
 */
class RestoreObjectRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string|null,
     *     RestoreRequest?: Shapes\RestoreRequest|null,
     *     RequestPayer?: 'requester'|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
