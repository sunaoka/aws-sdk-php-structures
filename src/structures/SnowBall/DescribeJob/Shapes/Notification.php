<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnsTopicARN
 * @property list<'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending'>|null $JobStatesToNotify
 * @property bool|null $NotifyAll
 * @property string|null $DevicePickupSnsTopicARN
 */
class Notification extends Shape
{
    /**
     * @param array{
     *     SnsTopicARN?: string|null,
     *     JobStatesToNotify?: list<'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending'>|null,
     *     NotifyAll?: bool|null,
     *     DevicePickupSnsTopicARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
