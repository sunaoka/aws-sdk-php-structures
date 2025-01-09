<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Capacity
 * @property string $Description
 * @property RuleGroupDetails $RuleGroup
 * @property string $RuleGroupArn
 * @property string $RuleGroupId
 * @property string $RuleGroupName
 * @property string $Type
 */
class AwsNetworkFirewallRuleGroupDetails extends Shape
{
    /**
     * @param array{
     *     Capacity?: int,
     *     Description?: string,
     *     RuleGroup?: RuleGroupDetails,
     *     RuleGroupArn?: string,
     *     RuleGroupId?: string,
     *     RuleGroupName?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
