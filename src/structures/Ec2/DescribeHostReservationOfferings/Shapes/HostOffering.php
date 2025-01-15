<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHostReservationOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD'|null $CurrencyCode
 * @property int|null $Duration
 * @property string|null $HourlyPrice
 * @property string|null $InstanceFamily
 * @property string|null $OfferingId
 * @property 'AllUpfront'|'PartialUpfront'|'NoUpfront'|null $PaymentOption
 * @property string|null $UpfrontPrice
 */
class HostOffering extends Shape
{
    /**
     * @param array{
     *     CurrencyCode?: 'USD'|null,
     *     Duration?: int|null,
     *     HourlyPrice?: string|null,
     *     InstanceFamily?: string|null,
     *     OfferingId?: string|null,
     *     PaymentOption?: 'AllUpfront'|'PartialUpfront'|'NoUpfront'|null,
     *     UpfrontPrice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
