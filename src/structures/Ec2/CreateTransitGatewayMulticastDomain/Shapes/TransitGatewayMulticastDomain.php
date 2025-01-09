<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMulticastDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayMulticastDomainId
 * @property string $TransitGatewayId
 * @property string $TransitGatewayMulticastDomainArn
 * @property string $OwnerId
 * @property TransitGatewayMulticastDomainOptions $Options
 * @property 'pending'|'available'|'deleting'|'deleted' $State
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Tag> $Tags
 */
class TransitGatewayMulticastDomain extends Shape
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId?: string,
     *     TransitGatewayId?: string,
     *     TransitGatewayMulticastDomainArn?: string,
     *     OwnerId?: string,
     *     Options?: TransitGatewayMulticastDomainOptions,
     *     State?: 'pending'|'available'|'deleting'|'deleted',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
