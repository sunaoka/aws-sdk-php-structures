<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHostReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property 'USD' $CurrencyCode
 * @property int $Duration
 * @property \Aws\Api\DateTimeResult $End
 * @property list<string> $HostIdSet
 * @property string $HostReservationId
 * @property string $HourlyPrice
 * @property string $InstanceFamily
 * @property string $OfferingId
 * @property 'AllUpfront'|'PartialUpfront'|'NoUpfront' $PaymentOption
 * @property \Aws\Api\DateTimeResult $Start
 * @property 'payment-pending'|'payment-failed'|'active'|'retired' $State
 * @property string $UpfrontPrice
 * @property list<Tag> $Tags
 */
class HostReservation extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     CurrencyCode?: 'USD',
     *     Duration?: int,
     *     End?: \Aws\Api\DateTimeResult,
     *     HostIdSet?: list<string>,
     *     HostReservationId?: string,
     *     HourlyPrice?: string,
     *     InstanceFamily?: string,
     *     OfferingId?: string,
     *     PaymentOption?: 'AllUpfront'|'PartialUpfront'|'NoUpfront',
     *     Start?: \Aws\Api\DateTimeResult,
     *     State?: 'payment-pending'|'payment-failed'|'active'|'retired',
     *     UpfrontPrice?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
