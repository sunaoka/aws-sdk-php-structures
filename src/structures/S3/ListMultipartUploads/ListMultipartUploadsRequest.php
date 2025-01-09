<?php

namespace Sunaoka\Aws\Structures\S3\ListMultipartUploads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Delimiter
 * @property 'url' $EncodingType
 * @property string $KeyMarker
 * @property int $MaxUploads
 * @property string $Prefix
 * @property string $UploadIdMarker
 * @property string $ExpectedBucketOwner
 * @property 'requester' $RequestPayer
 */
class ListMultipartUploadsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Delimiter?: string,
     *     EncodingType?: 'url',
     *     KeyMarker?: string,
     *     MaxUploads?: int,
     *     Prefix?: string,
     *     UploadIdMarker?: string,
     *     ExpectedBucketOwner?: string,
     *     RequestPayer?: 'requester'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
