<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByTrustStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<LambdaFunctionAssociation>|null $Items
 */
class LambdaFunctionAssociations extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<LambdaFunctionAssociation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
