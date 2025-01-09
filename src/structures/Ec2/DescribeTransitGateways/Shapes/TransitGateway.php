<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayId
 * @property string $TransitGatewayArn
 * @property 'pending'|'available'|'modifying'|'deleting'|'deleted' $State
 * @property string $OwnerId
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property TransitGatewayOptions $Options
 * @property list<Tag> $Tags
 */
class TransitGateway extends Shape
{
    /**
     * @param array{
     *     TransitGatewayId?: string,
     *     TransitGatewayArn?: string,
     *     State?: 'pending'|'available'|'modifying'|'deleting'|'deleted',
     *     OwnerId?: string,
     *     Description?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Options?: TransitGatewayOptions,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
