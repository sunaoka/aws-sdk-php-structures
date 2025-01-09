<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DisableInsightRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $RuleNames
 */
class DisableInsightRulesRequest extends Request
{
    /**
     * @param array{RuleNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
