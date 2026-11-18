<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $requiredApprovalCount
 */
class BuyerAgreementApprovalCriteria extends Shape
{
    /**
     * @param array{requiredApprovalCount: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
