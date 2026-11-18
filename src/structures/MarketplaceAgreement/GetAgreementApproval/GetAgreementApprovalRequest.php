<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementApprovalId
 */
class GetAgreementApprovalRequest extends Request
{
    /**
     * @param array{agreementApprovalId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
