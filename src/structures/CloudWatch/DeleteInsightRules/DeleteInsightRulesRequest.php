<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteInsightRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $RuleNames
 */
class DeleteInsightRulesRequest extends Request
{
    /**
     * @param array{RuleNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
