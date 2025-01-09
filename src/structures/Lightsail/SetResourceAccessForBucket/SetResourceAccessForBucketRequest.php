<?php

namespace Sunaoka\Aws\Structures\Lightsail\SetResourceAccessForBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 * @property string $bucketName
 * @property 'allow'|'deny' $access
 */
class SetResourceAccessForBucketRequest extends Request
{
    /**
     * @param array{
     *     resourceName: string,
     *     bucketName: string,
     *     access: 'allow'|'deny'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
