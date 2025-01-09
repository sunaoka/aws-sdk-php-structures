<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByAnycastIpListId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<CacheBehavior> $Items
 */
class CacheBehaviors extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<CacheBehavior>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
