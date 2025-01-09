<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<Origin> $Items
 */
class Origins extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items: list<Origin>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
