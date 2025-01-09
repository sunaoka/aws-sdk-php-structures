<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateBucketAccessKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 */
class CreateBucketAccessKeyRequest extends Request
{
    /**
     * @param array{bucketName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
