<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseHostReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property 'USD' $CurrencyCode
 * @property list<string> $HostIdSet
 * @property string $LimitPrice
 * @property string $OfferingId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class PurchaseHostReservationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     CurrencyCode?: 'USD',
     *     HostIdSet: list<string>,
     *     LimitPrice?: string,
     *     OfferingId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
