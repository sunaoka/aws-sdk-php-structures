<?php

namespace Sunaoka\Aws\Structures\BillingConductor\BatchDisassociateResourcesFromCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property 'INVALID_ARN'|'SERVICE_LIMIT_EXCEEDED'|'ILLEGAL_CUSTOMLINEITEM'|'INTERNAL_SERVER_EXCEPTION'|'INVALID_BILLING_PERIOD_RANGE' $Reason
 */
class AssociateResourceError extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     Reason?: 'INVALID_ARN'|'SERVICE_LIMIT_EXCEEDED'|'ILLEGAL_CUSTOMLINEITEM'|'INTERNAL_SERVER_EXCEPTION'|'INVALID_BILLING_PERIOD_RANGE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
