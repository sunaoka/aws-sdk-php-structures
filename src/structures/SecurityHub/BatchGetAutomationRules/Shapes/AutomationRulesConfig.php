<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleArn
 * @property 'ENABLED'|'DISABLED' $RuleStatus
 * @property int $RuleOrder
 * @property string $RuleName
 * @property string $Description
 * @property bool $IsTerminal
 * @property AutomationRulesFindingFilters $Criteria
 * @property list<AutomationRulesAction> $Actions
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $CreatedBy
 */
class AutomationRulesConfig extends Shape
{
    /**
     * @param array{
     *     RuleArn?: string,
     *     RuleStatus?: 'ENABLED'|'DISABLED',
     *     RuleOrder?: int,
     *     RuleName?: string,
     *     Description?: string,
     *     IsTerminal?: bool,
     *     Criteria?: AutomationRulesFindingFilters,
     *     Actions?: list<AutomationRulesAction>,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
