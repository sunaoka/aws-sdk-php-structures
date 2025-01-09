<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCarrierGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CarrierGatewayId
 * @property string $VpcId
 * @property 'pending'|'available'|'deleting'|'deleted' $State
 * @property string $OwnerId
 * @property list<Tag> $Tags
 */
class CarrierGateway extends Shape
{
    /**
     * @param array{
     *     CarrierGatewayId?: string,
     *     VpcId?: string,
     *     State?: 'pending'|'available'|'deleting'|'deleted',
     *     OwnerId?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
