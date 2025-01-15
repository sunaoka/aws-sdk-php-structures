<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListResourcesAssociatedToCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PARENT'|'CHILD'|null $Relationship
 */
class ListResourcesAssociatedToCustomLineItemFilter extends Shape
{
    /**
     * @param array{Relationship?: 'PARENT'|'CHILD'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
