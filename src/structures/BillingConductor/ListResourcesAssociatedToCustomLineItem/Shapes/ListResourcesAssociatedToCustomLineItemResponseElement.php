<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListResourcesAssociatedToCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property 'PARENT'|'CHILD'|null $Relationship
 * @property string|null $EndBillingPeriod
 */
class ListResourcesAssociatedToCustomLineItemResponseElement extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Relationship?: 'PARENT'|'CHILD'|null,
     *     EndBillingPeriod?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
