<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByAnycastIpListId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<OriginCustomHeader> $Items
 */
class CustomHeaders extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<OriginCustomHeader>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
