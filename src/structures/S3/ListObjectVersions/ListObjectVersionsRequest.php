<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $Delimiter
 * @property 'url'|null $EncodingType
 * @property string|null $KeyMarker
 * @property int|null $MaxKeys
 * @property string|null $Prefix
 * @property string|null $VersionIdMarker
 * @property string|null $ExpectedBucketOwner
 * @property 'requester'|null $RequestPayer
 * @property list<'RestoreStatus'>|null $OptionalObjectAttributes
 */
class ListObjectVersionsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Delimiter?: string|null,
     *     EncodingType?: 'url'|null,
     *     KeyMarker?: string|null,
     *     MaxKeys?: int|null,
     *     Prefix?: string|null,
     *     VersionIdMarker?: string|null,
     *     ExpectedBucketOwner?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     OptionalObjectAttributes?: list<'RestoreStatus'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
