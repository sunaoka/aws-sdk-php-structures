<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketAccessKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessKeyId
 * @property string|null $secretAccessKey
 * @property 'Active'|'Inactive'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property AccessKeyLastUsed|null $lastUsed
 */
class AccessKey extends Shape
{
    /**
     * @param array{
     *     accessKeyId?: string|null,
     *     secretAccessKey?: string|null,
     *     status?: 'Active'|'Inactive'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUsed?: AccessKeyLastUsed|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
