<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafRegionalWebAclRulesListActionDetails|null $Action
 * @property AwsWafRegionalWebAclRulesListOverrideActionDetails|null $OverrideAction
 * @property int|null $Priority
 * @property string|null $RuleId
 * @property string|null $Type
 */
class AwsWafRegionalWebAclRulesListDetails extends Shape
{
    /**
     * @param array{
     *     Action?: AwsWafRegionalWebAclRulesListActionDetails|null,
     *     OverrideAction?: AwsWafRegionalWebAclRulesListOverrideActionDetails|null,
     *     Priority?: int|null,
     *     RuleId?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
