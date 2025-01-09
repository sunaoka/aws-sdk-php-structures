<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteBucketAccessKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 * @property string $accessKeyId
 */
class DeleteBucketAccessKeyRequest extends Request
{
    /**
     * @param array{
     *     bucketName: string,
     *     accessKeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
