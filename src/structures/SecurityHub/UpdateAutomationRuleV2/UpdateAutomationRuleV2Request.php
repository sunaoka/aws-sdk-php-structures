<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateAutomationRuleV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'ENABLED'|'DISABLED'|null $RuleStatus
 * @property float|null $RuleOrder
 * @property string|null $Description
 * @property string|null $RuleName
 * @property Shapes\Criteria|null $Criteria
 * @property list<Shapes\AutomationRulesActionV2>|null $Actions
 */
class UpdateAutomationRuleV2Request extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     RuleStatus?: 'ENABLED'|'DISABLED'|null,
     *     RuleOrder?: float|null,
     *     Description?: string|null,
     *     RuleName?: string|null,
     *     Criteria?: Shapes\Criteria|null,
     *     Actions?: list<Shapes\AutomationRulesActionV2>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
