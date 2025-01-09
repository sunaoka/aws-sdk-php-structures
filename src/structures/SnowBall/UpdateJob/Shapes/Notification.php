<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnsTopicARN
 * @property list<'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending'> $JobStatesToNotify
 * @property bool $NotifyAll
 * @property string $DevicePickupSnsTopicARN
 */
class Notification extends Shape
{
    /**
     * @param array{
     *     SnsTopicARN?: string,
     *     JobStatesToNotify?: list<'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending'>,
     *     NotifyAll?: bool,
     *     DevicePickupSnsTopicARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
