<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\RejectAgreementApproval;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BuyerAgreementApprovalRejectionInput|null $buyerAgreementApprovalRejectionInput
 */
class RejectAgreementApprovalRequest extends Request
{
    /**
     * @param array{buyerAgreementApprovalRejectionInput?: Shapes\BuyerAgreementApprovalRejectionInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
