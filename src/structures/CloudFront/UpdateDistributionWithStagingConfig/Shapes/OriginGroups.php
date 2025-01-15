<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<OriginGroup>|null $Items
 */
class OriginGroups extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<OriginGroup>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
