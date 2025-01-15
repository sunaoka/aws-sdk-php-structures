<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayId
 * @property string|null $TransitGatewayArn
 * @property 'pending'|'available'|'modifying'|'deleting'|'deleted'|null $State
 * @property string|null $OwnerId
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property TransitGatewayOptions|null $Options
 * @property list<Tag>|null $Tags
 */
class TransitGateway extends Shape
{
    /**
     * @param array{
     *     TransitGatewayId?: string|null,
     *     TransitGatewayArn?: string|null,
     *     State?: 'pending'|'available'|'modifying'|'deleting'|'deleted'|null,
     *     OwnerId?: string|null,
     *     Description?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Options?: TransitGatewayOptions|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
