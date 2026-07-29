<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPolicyTableEntry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceCidrBlock
 * @property string|null $SourcePortRange
 * @property string|null $DestinationCidrBlock
 * @property string|null $DestinationPortRange
 * @property string|null $Protocol
 * @property TransitGatewayRequestPolicyRuleMetaData|null $MetaData
 */
class TransitGatewayRequestPolicyRule extends Shape
{
    /**
     * @param array{
     *     SourceCidrBlock?: string|null,
     *     SourcePortRange?: string|null,
     *     DestinationCidrBlock?: string|null,
     *     DestinationPortRange?: string|null,
     *     Protocol?: string|null,
     *     MetaData?: TransitGatewayRequestPolicyRuleMetaData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
