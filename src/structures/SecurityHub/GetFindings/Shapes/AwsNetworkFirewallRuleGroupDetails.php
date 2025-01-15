<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Capacity
 * @property string|null $Description
 * @property RuleGroupDetails|null $RuleGroup
 * @property string|null $RuleGroupArn
 * @property string|null $RuleGroupId
 * @property string|null $RuleGroupName
 * @property string|null $Type
 */
class AwsNetworkFirewallRuleGroupDetails extends Shape
{
    /**
     * @param array{
     *     Capacity?: int|null,
     *     Description?: string|null,
     *     RuleGroup?: RuleGroupDetails|null,
     *     RuleGroupArn?: string|null,
     *     RuleGroupId?: string|null,
     *     RuleGroupName?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
