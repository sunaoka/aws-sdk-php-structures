<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHostReservationOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD' $CurrencyCode
 * @property int $Duration
 * @property string $HourlyPrice
 * @property string $InstanceFamily
 * @property string $OfferingId
 * @property 'AllUpfront'|'PartialUpfront'|'NoUpfront' $PaymentOption
 * @property string $UpfrontPrice
 */
class HostOffering extends Shape
{
    /**
     * @param array{
     *     CurrencyCode?: 'USD',
     *     Duration?: int,
     *     HourlyPrice?: string,
     *     InstanceFamily?: string,
     *     OfferingId?: string,
     *     PaymentOption?: 'AllUpfront'|'PartialUpfront'|'NoUpfront',
     *     UpfrontPrice?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
