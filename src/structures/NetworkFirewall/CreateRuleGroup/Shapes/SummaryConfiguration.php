<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SID'|'MSG'|'METADATA'>|null $RuleOptions
 */
class SummaryConfiguration extends Shape
{
    /**
     * @param array{RuleOptions?: list<'SID'|'MSG'|'METADATA'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
