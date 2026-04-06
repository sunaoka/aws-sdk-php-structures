<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\UpdateAutomationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BeforeAccountRules'|'AfterAccountRules'|null $ruleApplyOrder
 * @property list<string>|null $accountIds
 */
class OrganizationConfiguration extends Shape
{
    /**
     * @param array{
     *     ruleApplyOrder?: 'BeforeAccountRules'|'AfterAccountRules'|null,
     *     accountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
