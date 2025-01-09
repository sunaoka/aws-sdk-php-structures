<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketAccessKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $lastUsedDate
 * @property string $region
 * @property string $serviceName
 */
class AccessKeyLastUsed extends Shape
{
    /**
     * @param array{
     *     lastUsedDate?: \Aws\Api\DateTimeResult,
     *     region?: string,
     *     serviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
