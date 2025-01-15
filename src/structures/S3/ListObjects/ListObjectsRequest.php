<?php

namespace Sunaoka\Aws\Structures\S3\ListObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $Delimiter
 * @property 'url'|null $EncodingType
 * @property string|null $Marker
 * @property int|null $MaxKeys
 * @property string|null $Prefix
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 * @property list<'RestoreStatus'>|null $OptionalObjectAttributes
 */
class ListObjectsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Delimiter?: string|null,
     *     EncodingType?: 'url'|null,
     *     Marker?: string|null,
     *     MaxKeys?: int|null,
     *     Prefix?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null,
     *     OptionalObjectAttributes?: list<'RestoreStatus'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
