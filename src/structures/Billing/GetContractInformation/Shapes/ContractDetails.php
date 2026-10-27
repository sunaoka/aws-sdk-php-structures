<?php

namespace Sunaoka\Aws\Structures\Billing\GetContractInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrivatePricingAddendum|null $privatePricingAddendum
 */
class ContractDetails extends Shape
{
    /**
     * @param array{privatePricingAddendum?: PrivatePricingAddendum|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
