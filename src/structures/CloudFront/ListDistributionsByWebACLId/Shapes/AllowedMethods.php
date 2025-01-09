<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByWebACLId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<'GET'|'HEAD'|'POST'|'PUT'|'PATCH'|'OPTIONS'|'DELETE'> $Items
 * @property CachedMethods $CachedMethods
 */
class AllowedMethods extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items: list<'GET'|'HEAD'|'POST'|'PUT'|'PATCH'|'OPTIONS'|'DELETE'>,
     *     CachedMethods?: CachedMethods
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
