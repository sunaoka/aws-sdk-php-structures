<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Name'|'RecommendedActionType'|'Status'|'RuleType'|'OrganizationConfigurationRuleApplyOrder'|'AccountId' $name
 * @property list<string> $values
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     name: 'Name'|'RecommendedActionType'|'Status'|'RuleType'|'OrganizationConfigurationRuleApplyOrder'|'AccountId',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
