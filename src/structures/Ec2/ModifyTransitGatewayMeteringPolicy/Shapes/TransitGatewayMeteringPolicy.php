<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayMeteringPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayMeteringPolicyId
 * @property string|null $TransitGatewayId
 * @property list<string>|null $MiddleboxAttachmentIds
 * @property 'available'|'deleted'|'pending'|'modifying'|'deleting'|null $State
 * @property \Aws\Api\DateTimeResult|null $UpdateEffectiveAt
 * @property list<Tag>|null $Tags
 */
class TransitGatewayMeteringPolicy extends Shape
{
    /**
     * @param array{
     *     TransitGatewayMeteringPolicyId?: string|null,
     *     TransitGatewayId?: string|null,
     *     MiddleboxAttachmentIds?: list<string>|null,
     *     State?: 'available'|'deleted'|'pending'|'modifying'|'deleting'|null,
     *     UpdateEffectiveAt?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
