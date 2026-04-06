<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListOrders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACKNOWLEDGING'|'ACKNOWLEDGED'|'UNACKNOWLEDGED'|null $acknowledgmentStatus
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $networkArn
 * @property string|null $networkSiteArn
 * @property string|null $orderArn
 * @property list<OrderedResourceDefinition>|null $orderedResources
 * @property Address|null $shippingAddress
 * @property list<TrackingInformation>|null $trackingInformation
 */
class Order extends Shape
{
    /**
     * @param array{
     *     acknowledgmentStatus?: 'ACKNOWLEDGING'|'ACKNOWLEDGED'|'UNACKNOWLEDGED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     networkArn?: string|null,
     *     networkSiteArn?: string|null,
     *     orderArn?: string|null,
     *     orderedResources?: list<OrderedResourceDefinition>|null,
     *     shippingAddress?: Address|null,
     *     trackingInformation?: list<TrackingInformation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
