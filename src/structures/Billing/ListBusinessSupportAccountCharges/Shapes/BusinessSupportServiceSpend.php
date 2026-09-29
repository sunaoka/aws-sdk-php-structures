<?php

namespace Sunaoka\Aws\Structures\Billing\ListBusinessSupportAccountCharges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contributingService
 * @property string $itemType
 * @property string|null $description
 * @property string $chargeAmount
 * @property string $currency
 */
class BusinessSupportServiceSpend extends Shape
{
    /**
     * @param array{
     *     contributingService: string,
     *     itemType: string,
     *     description?: string|null,
     *     chargeAmount: string,
     *     currency: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
