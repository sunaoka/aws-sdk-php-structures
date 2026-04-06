<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetBillingAdjustmentRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 * @property string $billingAdjustmentRequestId
 */
class GetBillingAdjustmentRequestRequest extends Request
{
    /**
     * @param array{
     *     agreementId: string,
     *     billingAdjustmentRequestId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
