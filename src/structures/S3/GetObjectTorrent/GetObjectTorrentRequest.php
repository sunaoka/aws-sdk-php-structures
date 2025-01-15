<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectTorrent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 */
class GetObjectTorrentRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
