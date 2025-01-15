<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $Tags
 * @property 'ENABLED'|'DISABLED'|null $RuleStatus
 * @property int<1, 1000> $RuleOrder
 * @property string $RuleName
 * @property string $Description
 * @property bool|null $IsTerminal
 * @property Shapes\AutomationRulesFindingFilters $Criteria
 * @property list<Shapes\AutomationRulesAction> $Actions
 */
class CreateAutomationRuleRequest extends Request
{
    /**
     * @param array{
     *     Tags?: array<string, string>|null,
     *     RuleStatus?: 'ENABLED'|'DISABLED'|null,
     *     RuleOrder: int<1, 1000>,
     *     RuleName: string,
     *     Description: string,
     *     IsTerminal?: bool|null,
     *     Criteria: Shapes\AutomationRulesFindingFilters,
     *     Actions: list<Shapes\AutomationRulesAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
