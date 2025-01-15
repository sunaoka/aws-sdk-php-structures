<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string|null $VersionId
 * @property int|null $MaxParts
 * @property int|null $PartNumberMarker
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKey
 * @property string|null $SSECustomerKeyMD5
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 * @property list<'ETag'|'Checksum'|'ObjectParts'|'StorageClass'|'ObjectSize'> $ObjectAttributes
 */
class GetObjectAttributesRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string|null,
     *     MaxParts?: int|null,
     *     PartNumberMarker?: int|null,
     *     SSECustomerAlgorithm?: string|null,
     *     SSECustomerKey?: string|null,
     *     SSECustomerKeyMD5?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null,
     *     ObjectAttributes: list<'ETag'|'Checksum'|'ObjectParts'|'StorageClass'|'ObjectSize'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
