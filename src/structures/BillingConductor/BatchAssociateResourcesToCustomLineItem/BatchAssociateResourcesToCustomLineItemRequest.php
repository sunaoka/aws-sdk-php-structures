<?php

namespace Sunaoka\Aws\Structures\BillingConductor\BatchAssociateResourcesToCustomLineItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetArn
 * @property list<string> $ResourceArns
 * @property Shapes\CustomLineItemBillingPeriodRange $BillingPeriodRange
 */
class BatchAssociateResourcesToCustomLineItemRequest extends Request
{
    /**
     * @param array{
     *     TargetArn: string,
     *     ResourceArns: list<string>,
     *     BillingPeriodRange?: Shapes\CustomLineItemBillingPeriodRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
