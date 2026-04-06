<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateOrder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property list<Shapes\LineItemRequest>|null $LineItems
 * @property 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT' $PaymentOption
 * @property 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'|null $PaymentTerm
 */
class CreateOrderRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     LineItems?: list<Shapes\LineItemRequest>|null,
     *     PaymentOption: 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT',
     *     PaymentTerm?: 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
