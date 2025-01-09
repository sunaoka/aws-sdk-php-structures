<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayPolicyTableEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceCidrBlock
 * @property string $SourcePortRange
 * @property string $DestinationCidrBlock
 * @property string $DestinationPortRange
 * @property string $Protocol
 * @property TransitGatewayPolicyRuleMetaData $MetaData
 */
class TransitGatewayPolicyRule extends Shape
{
    /**
     * @param array{
     *     SourceCidrBlock?: string,
     *     SourcePortRange?: string,
     *     DestinationCidrBlock?: string,
     *     DestinationPortRange?: string,
     *     Protocol?: string,
     *     MetaData?: TransitGatewayPolicyRuleMetaData
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
