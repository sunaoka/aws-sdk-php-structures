<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleGroupId
 * @property list<Shapes\RuleGroupUpdate> $Updates
 * @property string $ChangeToken
 */
class UpdateRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupId: string,
     *     Updates: list<Shapes\RuleGroupUpdate>,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
