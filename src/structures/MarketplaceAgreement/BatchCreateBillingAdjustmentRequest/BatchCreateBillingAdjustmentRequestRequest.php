<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\BatchCreateBillingAdjustmentRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchCreateBillingAdjustmentRequestEntry> $billingAdjustmentRequestEntries
 */
class BatchCreateBillingAdjustmentRequestRequest extends Request
{
    /**
     * @param array{billingAdjustmentRequestEntries: list<Shapes\BatchCreateBillingAdjustmentRequestEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
