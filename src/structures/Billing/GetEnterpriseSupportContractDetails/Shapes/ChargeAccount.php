<?php

namespace Sunaoka\Aws\Structures\Billing\GetEnterpriseSupportContractDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $chargePercentage
 */
class ChargeAccount extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     chargePercentage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
