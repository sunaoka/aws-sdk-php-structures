<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\AcknowledgeOrderReceipt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACKNOWLEDGING'|'ACKNOWLEDGED'|'UNACKNOWLEDGED' $acknowledgmentStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $networkArn
 * @property string $networkSiteArn
 * @property string $orderArn
 * @property list<OrderedResourceDefinition> $orderedResources
 * @property Address $shippingAddress
 * @property list<TrackingInformation> $trackingInformation
 */
class Order extends Shape
{
    /**
     * @param array{
     *     acknowledgmentStatus?: 'ACKNOWLEDGING'|'ACKNOWLEDGED'|'UNACKNOWLEDGED',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     networkArn?: string,
     *     networkSiteArn?: string,
     *     orderArn?: string,
     *     orderedResources?: list<OrderedResourceDefinition>,
     *     shippingAddress?: Address,
     *     trackingInformation?: list<TrackingInformation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
