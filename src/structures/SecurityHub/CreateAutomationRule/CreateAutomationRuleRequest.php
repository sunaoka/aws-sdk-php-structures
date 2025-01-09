<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $Tags
 * @property 'ENABLED'|'DISABLED' $RuleStatus
 * @property int<1, 1000> $RuleOrder
 * @property string $RuleName
 * @property string $Description
 * @property bool $IsTerminal
 * @property Shapes\AutomationRulesFindingFilters $Criteria
 * @property list<Shapes\AutomationRulesAction> $Actions
 */
class CreateAutomationRuleRequest extends Request
{
    /**
     * @param array{
     *     Tags?: array<string, string>,
     *     RuleStatus?: 'ENABLED'|'DISABLED',
     *     RuleOrder: int<1, 1000>,
     *     RuleName: string,
     *     Description: string,
     *     IsTerminal?: bool,
     *     Criteria: Shapes\AutomationRulesFindingFilters,
     *     Actions: list<Shapes\AutomationRulesAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
