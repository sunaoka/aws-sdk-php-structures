<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\AcceptAgreementApproval;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BuyerAgreementApprovalApproverInput|null $buyerAgreementApprovalApproverInput
 */
class AcceptAgreementApprovalRequest extends Request
{
    /**
     * @param array{buyerAgreementApprovalApproverInput?: Shapes\BuyerAgreementApprovalApproverInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
