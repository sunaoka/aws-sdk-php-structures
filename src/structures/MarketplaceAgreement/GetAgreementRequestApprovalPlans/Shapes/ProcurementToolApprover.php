<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestApprovalPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 */
class ProcurementToolApprover extends Shape
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
