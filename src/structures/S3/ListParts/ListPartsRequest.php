<?php

namespace Sunaoka\Aws\Structures\S3\ListParts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property int|null $MaxParts
 * @property int|null $PartNumberMarker
 * @property string $UploadId
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKey
 * @property string|null $SSECustomerKeyMD5
 */
class ListPartsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     MaxParts?: int|null,
     *     PartNumberMarker?: int|null,
     *     UploadId: string,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null,
     *     SSECustomerAlgorithm?: string|null,
     *     SSECustomerKey?: string|null,
     *     SSECustomerKeyMD5?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
