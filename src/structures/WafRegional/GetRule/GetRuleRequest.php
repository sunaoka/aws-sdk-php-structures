<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 */
class GetRuleRequest extends Request
{
    /**
     * @param array{RuleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
