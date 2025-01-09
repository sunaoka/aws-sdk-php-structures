<?php

namespace Sunaoka\Aws\Structures\Waf\ListActivatedRulesInRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleGroupId
 * @property string $NextMarker
 * @property int<0, 100> $Limit
 */
class ListActivatedRulesInRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupId?: string,
     *     NextMarker?: string,
     *     Limit?: int<0, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
