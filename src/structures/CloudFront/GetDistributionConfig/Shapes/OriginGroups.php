<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<OriginGroup> $Items
 */
class OriginGroups extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<OriginGroup>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
