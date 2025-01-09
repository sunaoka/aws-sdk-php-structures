<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayPolicyTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayPolicyTableId
 * @property string $TransitGatewayId
 * @property 'pending'|'available'|'deleting'|'deleted' $State
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Tag> $Tags
 */
class TransitGatewayPolicyTable extends Shape
{
    /**
     * @param array{
     *     TransitGatewayPolicyTableId?: string,
     *     TransitGatewayId?: string,
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
