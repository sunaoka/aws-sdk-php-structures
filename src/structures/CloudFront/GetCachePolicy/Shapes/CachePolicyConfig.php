<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetCachePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Comment
 * @property string $Name
 * @property int $DefaultTTL
 * @property int $MaxTTL
 * @property int $MinTTL
 * @property ParametersInCacheKeyAndForwardedToOrigin $ParametersInCacheKeyAndForwardedToOrigin
 */
class CachePolicyConfig extends Shape
{
    /**
     * @param array{
     *     Comment?: string,
     *     Name: string,
     *     DefaultTTL?: int,
     *     MaxTTL?: int,
     *     MinTTL: int,
     *     ParametersInCacheKeyAndForwardedToOrigin?: ParametersInCacheKeyAndForwardedToOrigin
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
