<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHostReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Count
 * @property 'USD'|null $CurrencyCode
 * @property int|null $Duration
 * @property \Aws\Api\DateTimeResult|null $End
 * @property list<string>|null $HostIdSet
 * @property string|null $HostReservationId
 * @property string|null $HourlyPrice
 * @property string|null $InstanceFamily
 * @property string|null $OfferingId
 * @property 'AllUpfront'|'PartialUpfront'|'NoUpfront'|null $PaymentOption
 * @property \Aws\Api\DateTimeResult|null $Start
 * @property 'active'|'expired'|'cancelled'|'scheduled'|'pending'|'failed'|'delayed'|'unsupported'|'payment-pending'|'payment-failed'|'retired'|null $State
 * @property string|null $UpfrontPrice
 * @property list<Tag>|null $Tags
 */
class HostReservation extends Shape
{
    /**
     * @param array{
     *     Count?: int|null,
     *     CurrencyCode?: 'USD'|null,
     *     Duration?: int|null,
     *     End?: \Aws\Api\DateTimeResult|null,
     *     HostIdSet?: list<string>|null,
     *     HostReservationId?: string|null,
     *     HourlyPrice?: string|null,
     *     InstanceFamily?: string|null,
     *     OfferingId?: string|null,
     *     PaymentOption?: 'AllUpfront'|'PartialUpfront'|'NoUpfront'|null,
     *     Start?: \Aws\Api\DateTimeResult|null,
     *     State?: 'active'|'expired'|'cancelled'|'scheduled'|'pending'|'failed'|'delayed'|'unsupported'|'payment-pending'|'payment-failed'|'retired'|null,
     *     UpfrontPrice?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
