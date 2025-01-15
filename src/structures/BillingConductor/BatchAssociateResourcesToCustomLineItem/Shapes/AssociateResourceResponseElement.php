<?php

namespace Sunaoka\Aws\Structures\BillingConductor\BatchAssociateResourcesToCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property AssociateResourceError|null $Error
 */
class AssociateResourceResponseElement extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Error?: AssociateResourceError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
