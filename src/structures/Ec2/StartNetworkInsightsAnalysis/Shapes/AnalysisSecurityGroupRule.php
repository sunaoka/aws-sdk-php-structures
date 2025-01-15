<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property string|null $Direction
 * @property string|null $SecurityGroupId
 * @property PortRange|null $PortRange
 * @property string|null $PrefixListId
 * @property string|null $Protocol
 */
class AnalysisSecurityGroupRule extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     Direction?: string|null,
     *     SecurityGroupId?: string|null,
     *     PortRange?: PortRange|null,
     *     PrefixListId?: string|null,
     *     Protocol?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
