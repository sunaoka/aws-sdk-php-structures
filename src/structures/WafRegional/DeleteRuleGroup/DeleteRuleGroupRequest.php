<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeleteRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleGroupId
 * @property string $ChangeToken
 */
class DeleteRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupId: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
