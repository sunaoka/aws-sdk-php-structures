<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketAccessKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessKeyId
 * @property string $secretAccessKey
 * @property 'Active'|'Inactive' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property AccessKeyLastUsed $lastUsed
 */
class AccessKey extends Shape
{
    /**
     * @param array{
     *     accessKeyId?: string,
     *     secretAccessKey?: string,
     *     status?: 'Active'|'Inactive',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUsed?: AccessKeyLastUsed
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
