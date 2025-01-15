<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayPolicyTableEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceCidrBlock
 * @property string|null $SourcePortRange
 * @property string|null $DestinationCidrBlock
 * @property string|null $DestinationPortRange
 * @property string|null $Protocol
 * @property TransitGatewayPolicyRuleMetaData|null $MetaData
 */
class TransitGatewayPolicyRule extends Shape
{
    /**
     * @param array{
     *     SourceCidrBlock?: string|null,
     *     SourcePortRange?: string|null,
     *     DestinationCidrBlock?: string|null,
     *     DestinationPortRange?: string|null,
     *     Protocol?: string|null,
     *     MetaData?: TransitGatewayPolicyRuleMetaData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
