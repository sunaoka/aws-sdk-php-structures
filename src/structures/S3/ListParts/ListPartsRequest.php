<?php

namespace Sunaoka\Aws\Structures\S3\ListParts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property int $MaxParts
 * @property int $PartNumberMarker
 * @property string $UploadId
 * @property 'requester' $RequestPayer
 * @property string $ExpectedBucketOwner
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKey
 * @property string $SSECustomerKeyMD5
 */
class ListPartsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     MaxParts?: int,
     *     PartNumberMarker?: int,
     *     UploadId: string,
     *     RequestPayer?: 'requester',
     *     ExpectedBucketOwner?: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
