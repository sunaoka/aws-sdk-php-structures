<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListPrices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property PriceWithCurrency|null $RegistrationPrice
 * @property PriceWithCurrency|null $TransferPrice
 * @property PriceWithCurrency|null $RenewalPrice
 * @property PriceWithCurrency|null $ChangeOwnershipPrice
 * @property PriceWithCurrency|null $RestorationPrice
 */
class DomainPrice extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     RegistrationPrice?: PriceWithCurrency|null,
     *     TransferPrice?: PriceWithCurrency|null,
     *     RenewalPrice?: PriceWithCurrency|null,
     *     ChangeOwnershipPrice?: PriceWithCurrency|null,
     *     RestorationPrice?: PriceWithCurrency|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
