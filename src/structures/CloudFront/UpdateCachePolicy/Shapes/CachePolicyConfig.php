<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateCachePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Comment
 * @property string $Name
 * @property int|null $DefaultTTL
 * @property int|null $MaxTTL
 * @property int $MinTTL
 * @property ParametersInCacheKeyAndForwardedToOrigin|null $ParametersInCacheKeyAndForwardedToOrigin
 */
class CachePolicyConfig extends Shape
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     Name: string,
     *     DefaultTTL?: int|null,
     *     MaxTTL?: int|null,
     *     MinTTL: int,
     *     ParametersInCacheKeyAndForwardedToOrigin?: ParametersInCacheKeyAndForwardedToOrigin|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
