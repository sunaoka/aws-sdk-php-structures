<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectTagging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $VersionId
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property Shapes\Tagging $Tagging
 * @property string $ExpectedBucketOwner
 * @property 'requester' $RequestPayer
 */
class PutObjectTaggingRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string,
     *     ContentMD5?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     Tagging: Shapes\Tagging,
     *     ExpectedBucketOwner?: string,
     *     RequestPayer?: 'requester'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
