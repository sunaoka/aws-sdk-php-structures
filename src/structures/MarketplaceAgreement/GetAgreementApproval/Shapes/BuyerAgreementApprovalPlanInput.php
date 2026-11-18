<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $planReference
 * @property string|null $requesterNote
 */
class BuyerAgreementApprovalPlanInput extends Shape
{
    /**
     * @param array{
     *     planReference: string,
     *     requesterNote?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
