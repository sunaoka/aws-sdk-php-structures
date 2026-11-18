<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property list<BuyerAgreementApprovalGroup> $groups
 */
class BuyerAgreementApprovalLevel extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     groups: list<BuyerAgreementApprovalGroup>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
