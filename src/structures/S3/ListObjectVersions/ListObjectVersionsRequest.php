<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Delimiter
 * @property 'url' $EncodingType
 * @property string $KeyMarker
 * @property int $MaxKeys
 * @property string $Prefix
 * @property string $VersionIdMarker
 * @property string $ExpectedBucketOwner
 * @property 'requester' $RequestPayer
 * @property list<'RestoreStatus'> $OptionalObjectAttributes
 */
class ListObjectVersionsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Delimiter?: string,
     *     EncodingType?: 'url',
     *     KeyMarker?: string,
     *     MaxKeys?: int,
     *     Prefix?: string,
     *     VersionIdMarker?: string,
     *     ExpectedBucketOwner?: string,
     *     RequestPayer?: 'requester',
     *     OptionalObjectAttributes?: list<'RestoreStatus'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
