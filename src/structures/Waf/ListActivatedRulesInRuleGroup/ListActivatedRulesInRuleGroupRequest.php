<?php

namespace Sunaoka\Aws\Structures\Waf\ListActivatedRulesInRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RuleGroupId
 * @property string|null $NextMarker
 * @property int<0, 100>|null $Limit
 */
class ListActivatedRulesInRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupId?: string|null,
     *     NextMarker?: string|null,
     *     Limit?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
