<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetAutomationRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AutomationRulesArns
 */
class BatchGetAutomationRulesRequest extends Request
{
    /**
     * @param array{AutomationRulesArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
