<?php

namespace Sunaoka\Aws\Structures\S3\AbortMultipartUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $UploadId
 * @property 'requester' $RequestPayer
 * @property string $ExpectedBucketOwner
 * @property \Aws\Api\DateTimeResult $IfMatchInitiatedTime
 */
class AbortMultipartUploadRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     UploadId: string,
     *     RequestPayer?: 'requester',
     *     ExpectedBucketOwner?: string,
     *     IfMatchInitiatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
