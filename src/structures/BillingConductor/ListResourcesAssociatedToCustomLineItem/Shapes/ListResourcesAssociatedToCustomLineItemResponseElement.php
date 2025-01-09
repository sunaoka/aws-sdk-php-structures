<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListResourcesAssociatedToCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'PARENT'|'CHILD' $Relationship
 * @property string $EndBillingPeriod
 */
class ListResourcesAssociatedToCustomLineItemResponseElement extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Relationship?: 'PARENT'|'CHILD',
     *     EndBillingPeriod?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
