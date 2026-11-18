<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestApprovalPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $emailAddress
 * @property string|null $name
 */
class EmailApprover extends Shape
{
    /**
     * @param array{
     *     emailAddress: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
