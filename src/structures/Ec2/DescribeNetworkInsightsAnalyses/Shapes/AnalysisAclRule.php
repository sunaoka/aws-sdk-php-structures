<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property bool|null $Egress
 * @property PortRange|null $PortRange
 * @property string|null $Protocol
 * @property string|null $RuleAction
 * @property int|null $RuleNumber
 */
class AnalysisAclRule extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     Egress?: bool|null,
     *     PortRange?: PortRange|null,
     *     Protocol?: string|null,
     *     RuleAction?: string|null,
     *     RuleNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
