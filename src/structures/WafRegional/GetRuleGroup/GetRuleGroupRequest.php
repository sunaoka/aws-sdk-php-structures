<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleGroupId
 */
class GetRuleGroupRequest extends Request
{
    /**
     * @param array{RuleGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
