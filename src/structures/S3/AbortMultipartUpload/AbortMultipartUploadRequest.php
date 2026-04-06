<?php

namespace Sunaoka\Aws\Structures\S3\AbortMultipartUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $UploadId
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 */
class AbortMultipartUploadRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     UploadId: string,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
