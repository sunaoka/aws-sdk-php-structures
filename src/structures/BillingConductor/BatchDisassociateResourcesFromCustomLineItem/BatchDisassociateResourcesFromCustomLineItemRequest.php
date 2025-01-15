<?php

namespace Sunaoka\Aws\Structures\BillingConductor\BatchDisassociateResourcesFromCustomLineItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetArn
 * @property list<string> $ResourceArns
 * @property Shapes\CustomLineItemBillingPeriodRange|null $BillingPeriodRange
 */
class BatchDisassociateResourcesFromCustomLineItemRequest extends Request
{
    /**
     * @param array{
     *     TargetArn: string,
     *     ResourceArns: list<string>,
     *     BillingPeriodRange?: Shapes\CustomLineItemBillingPeriodRange|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
