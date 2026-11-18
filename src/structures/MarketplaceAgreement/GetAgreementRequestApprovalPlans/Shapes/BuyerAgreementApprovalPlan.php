<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestApprovalPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $planReference
 * @property string|null $name
 * @property list<BuyerAgreementApprovalPlanLevel> $levels
 */
class BuyerAgreementApprovalPlan extends Shape
{
    /**
     * @param array{
     *     planReference: string,
     *     name?: string|null,
     *     levels: list<BuyerAgreementApprovalPlanLevel>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
