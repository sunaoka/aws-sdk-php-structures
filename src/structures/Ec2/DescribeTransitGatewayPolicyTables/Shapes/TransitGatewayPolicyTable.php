<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayPolicyTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayPolicyTableId
 * @property string|null $TransitGatewayId
 * @property 'pending'|'available'|'deleting'|'deleted'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<Tag>|null $Tags
 */
class TransitGatewayPolicyTable extends Shape
{
    /**
     * @param array{
     *     TransitGatewayPolicyTableId?: string|null,
     *     TransitGatewayId?: string|null,
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
