<?php

namespace Sunaoka\Aws\Structures\Billing\GetEnterpriseSupportContractDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingMonth
 */
class GetEnterpriseSupportContractDetailsRequest extends Request
{
    /**
     * @param array{billingMonth: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
