<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMeteringPolicyEntry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyRuleNumber
 * @property 'source-attachment-owner'|'destination-attachment-owner'|'transit-gateway-owner'|null $MeteredAccount
 * @property 'available'|'deleted'|null $State
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdateEffectiveAt
 * @property TransitGatewayMeteringPolicyRule|null $MeteringPolicyRule
 */
class TransitGatewayMeteringPolicyEntry extends Shape
{
    /**
     * @param array{
     *     PolicyRuleNumber?: string|null,
     *     MeteredAccount?: 'source-attachment-owner'|'destination-attachment-owner'|'transit-gateway-owner'|null,
     *     State?: 'available'|'deleted'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdateEffectiveAt?: \Aws\Api\DateTimeResult|null,
     *     MeteringPolicyRule?: TransitGatewayMeteringPolicyRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
