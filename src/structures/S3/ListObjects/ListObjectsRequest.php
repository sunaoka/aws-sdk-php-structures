<?php

namespace Sunaoka\Aws\Structures\S3\ListObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Delimiter
 * @property 'url' $EncodingType
 * @property string $Marker
 * @property int $MaxKeys
 * @property string $Prefix
 * @property 'requester' $RequestPayer
 * @property string $ExpectedBucketOwner
 * @property list<'RestoreStatus'> $OptionalObjectAttributes
 */
class ListObjectsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Delimiter?: string,
     *     EncodingType?: 'url',
     *     Marker?: string,
     *     MaxKeys?: int,
     *     Prefix?: string,
     *     RequestPayer?: 'requester',
     *     ExpectedBucketOwner?: string,
     *     OptionalObjectAttributes?: list<'RestoreStatus'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
