<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property string $Direction
 * @property string $SecurityGroupId
 * @property PortRange $PortRange
 * @property string $PrefixListId
 * @property string $Protocol
 */
class AnalysisSecurityGroupRule extends Shape
{
    /**
     * @param array{
     *     Cidr?: string,
     *     Direction?: string,
     *     SecurityGroupId?: string,
     *     PortRange?: PortRange,
     *     PrefixListId?: string,
     *     Protocol?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
