<?php

namespace Sunaoka\Aws\Structures\Billing\GetEnterpriseSupportContractDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string|null $amount
 * @property string|null $chargeType
 */
class AdditionalCharge extends Shape
{
    /**
     * @param array{
     *     description: string,
     *     amount?: string|null,
     *     chargeType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
