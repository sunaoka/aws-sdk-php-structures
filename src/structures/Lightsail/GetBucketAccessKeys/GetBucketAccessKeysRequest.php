<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketAccessKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 */
class GetBucketAccessKeysRequest extends Request
{
    /**
     * @param array{bucketName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
