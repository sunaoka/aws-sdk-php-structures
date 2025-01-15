<?php

namespace Sunaoka\Aws\Structures\BillingConductor\BatchAssociateResourcesToCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property 'INVALID_ARN'|'SERVICE_LIMIT_EXCEEDED'|'ILLEGAL_CUSTOMLINEITEM'|'INTERNAL_SERVER_EXCEPTION'|'INVALID_BILLING_PERIOD_RANGE'|null $Reason
 */
class AssociateResourceError extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     Reason?: 'INVALID_ARN'|'SERVICE_LIMIT_EXCEEDED'|'ILLEGAL_CUSTOMLINEITEM'|'INTERNAL_SERVER_EXCEPTION'|'INVALID_BILLING_PERIOD_RANGE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
