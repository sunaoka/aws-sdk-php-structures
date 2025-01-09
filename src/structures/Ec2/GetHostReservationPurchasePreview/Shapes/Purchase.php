<?php

namespace Sunaoka\Aws\Structures\Ec2\GetHostReservationPurchasePreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD' $CurrencyCode
 * @property int $Duration
 * @property list<string> $HostIdSet
 * @property string $HostReservationId
 * @property string $HourlyPrice
 * @property string $InstanceFamily
 * @property 'AllUpfront'|'PartialUpfront'|'NoUpfront' $PaymentOption
 * @property string $UpfrontPrice
 */
class Purchase extends Shape
{
    /**
     * @param array{
     *     CurrencyCode?: 'USD',
     *     Duration?: int,
     *     HostIdSet?: list<string>,
     *     HostReservationId?: string,
     *     HourlyPrice?: string,
     *     InstanceFamily?: string,
     *     PaymentOption?: 'AllUpfront'|'PartialUpfront'|'NoUpfront',
     *     UpfrontPrice?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
