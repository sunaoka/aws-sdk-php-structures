<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleArn
 * @property 'ENABLED'|'DISABLED'|null $RuleStatus
 * @property int<1, 1000>|null $RuleOrder
 * @property string|null $Description
 * @property string|null $RuleName
 * @property bool|null $IsTerminal
 * @property AutomationRulesFindingFilters|null $Criteria
 * @property list<AutomationRulesAction>|null $Actions
 */
class UpdateAutomationRulesRequestItem extends Shape
{
    /**
     * @param array{
     *     RuleArn: string,
     *     RuleStatus?: 'ENABLED'|'DISABLED'|null,
     *     RuleOrder?: int<1, 1000>|null,
     *     Description?: string|null,
     *     RuleName?: string|null,
     *     IsTerminal?: bool|null,
     *     Criteria?: AutomationRulesFindingFilters|null,
     *     Actions?: list<AutomationRulesAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
