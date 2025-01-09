<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetRateBasedRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 */
class GetRateBasedRuleRequest extends Request
{
    /**
     * @param array{RuleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
