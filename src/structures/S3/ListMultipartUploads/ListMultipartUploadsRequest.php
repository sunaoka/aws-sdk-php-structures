<?php

namespace Sunaoka\Aws\Structures\S3\ListMultipartUploads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $Delimiter
 * @property 'url'|null $EncodingType
 * @property string|null $KeyMarker
 * @property int|null $MaxUploads
 * @property string|null $Prefix
 * @property string|null $UploadIdMarker
 * @property string|null $ExpectedBucketOwner
 * @property 'requester'|null $RequestPayer
 */
class ListMultipartUploadsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Delimiter?: string|null,
     *     EncodingType?: 'url'|null,
     *     KeyMarker?: string|null,
     *     MaxUploads?: int|null,
     *     Prefix?: string|null,
     *     UploadIdMarker?: string|null,
     *     ExpectedBucketOwner?: string|null,
     *     RequestPayer?: 'requester'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
