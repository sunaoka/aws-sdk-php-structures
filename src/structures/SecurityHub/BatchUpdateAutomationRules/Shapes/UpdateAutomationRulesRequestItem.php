<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleArn
 * @property 'ENABLED'|'DISABLED' $RuleStatus
 * @property int $RuleOrder
 * @property string $Description
 * @property string $RuleName
 * @property bool $IsTerminal
 * @property AutomationRulesFindingFilters $Criteria
 * @property list<AutomationRulesAction> $Actions
 */
class UpdateAutomationRulesRequestItem extends Shape
{
    /**
     * @param array{
     *     RuleArn: string,
     *     RuleStatus?: 'ENABLED'|'DISABLED',
     *     RuleOrder?: int,
     *     Description?: string,
     *     RuleName?: string,
     *     IsTerminal?: bool,
     *     Criteria?: AutomationRulesFindingFilters,
     *     Actions?: list<AutomationRulesAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
