<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListPrices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property PriceWithCurrency $RegistrationPrice
 * @property PriceWithCurrency $TransferPrice
 * @property PriceWithCurrency $RenewalPrice
 * @property PriceWithCurrency $ChangeOwnershipPrice
 * @property PriceWithCurrency $RestorationPrice
 */
class DomainPrice extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     RegistrationPrice?: PriceWithCurrency,
     *     TransferPrice?: PriceWithCurrency,
     *     RenewalPrice?: PriceWithCurrency,
     *     ChangeOwnershipPrice?: PriceWithCurrency,
     *     RestorationPrice?: PriceWithCurrency
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
