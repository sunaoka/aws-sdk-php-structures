<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BeforeAccountRules'|'AfterAccountRules'|null $ruleApplyOrder
 * @property list<string>|null $accountIds
 * @property list<string>|null $organizationalUnitIds
 * @property list<string>|null $excludedOrganizationalUnitIds
 * @property list<string>|null $excludedAccountIds
 */
class OrganizationConfiguration extends Shape
{
    /**
     * @param array{
     *     ruleApplyOrder?: 'BeforeAccountRules'|'AfterAccountRules'|null,
     *     accountIds?: list<string>|null,
     *     organizationalUnitIds?: list<string>|null,
     *     excludedOrganizationalUnitIds?: list<string>|null,
     *     excludedAccountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
