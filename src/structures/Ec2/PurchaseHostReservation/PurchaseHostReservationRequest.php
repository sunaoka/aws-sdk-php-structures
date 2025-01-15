<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseHostReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property 'USD'|null $CurrencyCode
 * @property list<string> $HostIdSet
 * @property string|null $LimitPrice
 * @property string $OfferingId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class PurchaseHostReservationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     CurrencyCode?: 'USD'|null,
     *     HostIdSet: list<string>,
     *     LimitPrice?: string|null,
     *     OfferingId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
