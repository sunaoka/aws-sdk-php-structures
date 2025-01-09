<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateCachePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property CachePolicyConfig $CachePolicyConfig
 */
class CachePolicy extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     CachePolicyConfig: CachePolicyConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
