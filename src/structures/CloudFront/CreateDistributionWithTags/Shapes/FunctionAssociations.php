<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<FunctionAssociation> $Items
 */
class FunctionAssociations extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<FunctionAssociation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
