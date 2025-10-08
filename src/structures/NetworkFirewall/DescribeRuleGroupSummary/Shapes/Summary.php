<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroupSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuleSummary>|null $RuleSummaries
 */
class Summary extends Shape
{
    /**
     * @param array{RuleSummaries?: list<RuleSummary>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
