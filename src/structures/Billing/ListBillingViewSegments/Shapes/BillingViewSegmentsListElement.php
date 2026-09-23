<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViewSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BILLABLE'|'PRO_FORMA'|null $domain
 * @property BillingViewSegmentTimeRange|null $timeRange
 * @property string|null $billingTransferAccountId
 * @property string|null $managementAccountId
 * @property string|null $billingGroupPrimaryAccountId
 */
class BillingViewSegmentsListElement extends Shape
{
    /**
     * @param array{
     *     domain?: 'BILLABLE'|'PRO_FORMA'|null,
     *     timeRange?: BillingViewSegmentTimeRange|null,
     *     billingTransferAccountId?: string|null,
     *     managementAccountId?: string|null,
     *     billingGroupPrimaryAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
