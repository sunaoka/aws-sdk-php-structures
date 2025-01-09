<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListResourcesAssociatedToCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PARENT'|'CHILD' $Relationship
 */
class ListResourcesAssociatedToCustomLineItemFilter extends Shape
{
    /**
     * @param array{Relationship?: 'PARENT'|'CHILD'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
