<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateAutomationRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UpdateAutomationRulesRequestItem> $UpdateAutomationRulesRequestItems
 */
class BatchUpdateAutomationRulesRequest extends Request
{
    /**
     * @param array{UpdateAutomationRulesRequestItems: list<Shapes\UpdateAutomationRulesRequestItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
