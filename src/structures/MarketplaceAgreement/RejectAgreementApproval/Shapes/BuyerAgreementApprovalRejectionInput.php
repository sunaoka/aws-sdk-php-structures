<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\RejectAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agreementApprovalId
 * @property string $note
 * @property string|null $approverOutcomeIdToOverride
 */
class BuyerAgreementApprovalRejectionInput extends Shape
{
    /**
     * @param array{
     *     agreementApprovalId: string,
     *     note: string,
     *     approverOutcomeIdToOverride?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
