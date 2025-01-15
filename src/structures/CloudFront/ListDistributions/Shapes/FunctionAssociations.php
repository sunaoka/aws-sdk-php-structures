<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<FunctionAssociation>|null $Items
 */
class FunctionAssociations extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<FunctionAssociation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
