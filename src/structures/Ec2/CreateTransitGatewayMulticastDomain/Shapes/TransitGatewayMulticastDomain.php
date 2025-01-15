<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMulticastDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayMulticastDomainId
 * @property string|null $TransitGatewayId
 * @property string|null $TransitGatewayMulticastDomainArn
 * @property string|null $OwnerId
 * @property TransitGatewayMulticastDomainOptions|null $Options
 * @property 'pending'|'available'|'deleting'|'deleted'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<Tag>|null $Tags
 */
class TransitGatewayMulticastDomain extends Shape
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId?: string|null,
     *     TransitGatewayId?: string|null,
     *     TransitGatewayMulticastDomainArn?: string|null,
     *     OwnerId?: string|null,
     *     Options?: TransitGatewayMulticastDomainOptions|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
