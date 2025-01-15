<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketAccessKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $lastUsedDate
 * @property string|null $region
 * @property string|null $serviceName
 */
class AccessKeyLastUsed extends Shape
{
    /**
     * @param array{
     *     lastUsedDate?: \Aws\Api\DateTimeResult|null,
     *     region?: string|null,
     *     serviceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
