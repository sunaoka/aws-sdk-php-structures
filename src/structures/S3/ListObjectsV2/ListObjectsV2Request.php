<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $Delimiter
 * @property 'url'|null $EncodingType
 * @property int|null $MaxKeys
 * @property string|null $Prefix
 * @property string|null $ContinuationToken
 * @property bool|null $FetchOwner
 * @property string|null $StartAfter
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 * @property list<'RestoreStatus'>|null $OptionalObjectAttributes
 */
class ListObjectsV2Request extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Delimiter?: string|null,
     *     EncodingType?: 'url'|null,
     *     MaxKeys?: int|null,
     *     Prefix?: string|null,
     *     ContinuationToken?: string|null,
     *     FetchOwner?: bool|null,
     *     StartAfter?: string|null,
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
