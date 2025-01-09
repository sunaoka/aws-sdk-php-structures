<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListCachePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'managed'|'custom' $Type
 * @property CachePolicy $CachePolicy
 */
class CachePolicySummary extends Shape
{
    /**
     * @param array{
     *     Type: 'managed'|'custom',
     *     CachePolicy: CachePolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
