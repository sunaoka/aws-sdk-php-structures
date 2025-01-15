<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<OriginCustomHeader>|null $Items
 */
class CustomHeaders extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<OriginCustomHeader>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
