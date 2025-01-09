<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<LambdaFunctionAssociation> $Items
 */
class LambdaFunctionAssociations extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<LambdaFunctionAssociation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
