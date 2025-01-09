<?php

namespace Sunaoka\Aws\Structures\Waf\ListActivatedRulesInRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleGroupId
 * @property string $NextMarker
 * @property int $Limit
 */
class ListActivatedRulesInRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupId?: string,
     *     NextMarker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
