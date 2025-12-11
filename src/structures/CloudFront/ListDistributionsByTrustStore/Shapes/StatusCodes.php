<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByTrustStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<int> $Items
 */
class StatusCodes extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items: list<int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
