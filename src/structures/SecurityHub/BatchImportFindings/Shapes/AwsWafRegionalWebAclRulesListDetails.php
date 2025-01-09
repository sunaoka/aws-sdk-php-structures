<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafRegionalWebAclRulesListActionDetails $Action
 * @property AwsWafRegionalWebAclRulesListOverrideActionDetails $OverrideAction
 * @property int $Priority
 * @property string $RuleId
 * @property string $Type
 */
class AwsWafRegionalWebAclRulesListDetails extends Shape
{
    /**
     * @param array{
     *     Action?: AwsWafRegionalWebAclRulesListActionDetails,
     *     OverrideAction?: AwsWafRegionalWebAclRulesListOverrideActionDetails,
     *     Priority?: int,
     *     RuleId?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
