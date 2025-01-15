<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseHostReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD'|null $CurrencyCode
 * @property int|null $Duration
 * @property list<string>|null $HostIdSet
 * @property string|null $HostReservationId
 * @property string|null $HourlyPrice
 * @property string|null $InstanceFamily
 * @property 'AllUpfront'|'PartialUpfront'|'NoUpfront'|null $PaymentOption
 * @property string|null $UpfrontPrice
 */
class Purchase extends Shape
{
    /**
     * @param array{
     *     CurrencyCode?: 'USD'|null,
     *     Duration?: int|null,
     *     HostIdSet?: list<string>|null,
     *     HostReservationId?: string|null,
     *     HourlyPrice?: string|null,
     *     InstanceFamily?: string|null,
     *     PaymentOption?: 'AllUpfront'|'PartialUpfront'|'NoUpfront'|null,
     *     UpfrontPrice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
