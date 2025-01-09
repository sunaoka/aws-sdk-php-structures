<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Delimiter
 * @property 'url' $EncodingType
 * @property int $MaxKeys
 * @property string $Prefix
 * @property string $ContinuationToken
 * @property bool $FetchOwner
 * @property string $StartAfter
 * @property 'requester' $RequestPayer
 * @property string $ExpectedBucketOwner
 * @property list<'RestoreStatus'> $OptionalObjectAttributes
 */
class ListObjectsV2Request extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Delimiter?: string,
     *     EncodingType?: 'url',
     *     MaxKeys?: int,
     *     Prefix?: string,
     *     ContinuationToken?: string,
     *     FetchOwner?: bool,
     *     StartAfter?: string,
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
