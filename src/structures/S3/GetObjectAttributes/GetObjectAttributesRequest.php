<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $VersionId
 * @property int $MaxParts
 * @property int $PartNumberMarker
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKey
 * @property string $SSECustomerKeyMD5
 * @property 'requester' $RequestPayer
 * @property string $ExpectedBucketOwner
 * @property list<'ETag'|'Checksum'|'ObjectParts'|'StorageClass'|'ObjectSize'> $ObjectAttributes
 */
class GetObjectAttributesRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string,
     *     MaxParts?: int,
     *     PartNumberMarker?: int,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string,
     *     RequestPayer?: 'requester',
     *     ExpectedBucketOwner?: string,
     *     ObjectAttributes: list<'ETag'|'Checksum'|'ObjectParts'|'StorageClass'|'ObjectSize'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
