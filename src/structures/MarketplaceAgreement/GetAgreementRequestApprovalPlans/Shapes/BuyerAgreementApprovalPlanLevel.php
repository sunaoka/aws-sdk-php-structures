<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestApprovalPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property list<BuyerAgreementApprovalPlanGroup> $groups
 */
class BuyerAgreementApprovalPlanLevel extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     groups: list<BuyerAgreementApprovalPlanGroup>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
