<?php

namespace Sunaoka\Aws\Structures\Billing\GetEnterpriseSupportChargeSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingMonth
 */
class GetEnterpriseSupportChargeSummaryRequest extends Request
{
    /**
     * @param array{billingMonth: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
