<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeAnalysisFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property bool $Egress
 * @property PortRange $PortRange
 * @property string $Protocol
 * @property string $RuleAction
 * @property int $RuleNumber
 */
class AnalysisAclRule extends Shape
{
    /**
     * @param array{
     *     Cidr?: string,
     *     Egress?: bool,
     *     PortRange?: PortRange,
     *     Protocol?: string,
     *     RuleAction?: string,
     *     RuleNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
