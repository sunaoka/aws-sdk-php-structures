<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRuleV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleName
 * @property 'ENABLED'|'DISABLED'|null $RuleStatus
 * @property string $Description
 * @property float $RuleOrder
 * @property Shapes\Criteria $Criteria
 * @property list<Shapes\AutomationRulesActionV2> $Actions
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateAutomationRuleV2Request extends Request
{
    /**
     * @param array{
     *     RuleName: string,
     *     RuleStatus?: 'ENABLED'|'DISABLED'|null,
     *     Description: string,
     *     RuleOrder: float,
     *     Criteria: Shapes\Criteria,
     *     Actions: list<Shapes\AutomationRulesActionV2>,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
