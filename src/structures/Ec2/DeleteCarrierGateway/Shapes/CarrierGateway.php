<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCarrierGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CarrierGatewayId
 * @property string|null $VpcId
 * @property 'pending'|'available'|'deleting'|'deleted'|null $State
 * @property string|null $OwnerId
 * @property list<Tag>|null $Tags
 */
class CarrierGateway extends Shape
{
    /**
     * @param array{
     *     CarrierGatewayId?: string|null,
     *     VpcId?: string|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|null,
     *     OwnerId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
