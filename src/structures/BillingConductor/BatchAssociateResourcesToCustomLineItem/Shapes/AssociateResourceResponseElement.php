<?php

namespace Sunaoka\Aws\Structures\BillingConductor\BatchAssociateResourcesToCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property AssociateResourceError $Error
 */
class AssociateResourceResponseElement extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Error?: AssociateResourceError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
