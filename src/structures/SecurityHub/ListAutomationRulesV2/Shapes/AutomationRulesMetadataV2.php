<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListAutomationRulesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleArn
 * @property string|null $RuleId
 * @property float|null $RuleOrder
 * @property string|null $RuleName
 * @property 'ENABLED'|'DISABLED'|null $RuleStatus
 * @property string|null $Description
 * @property list<AutomationRulesActionTypeObjectV2>|null $Actions
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class AutomationRulesMetadataV2 extends Shape
{
    /**
     * @param array{
     *     RuleArn?: string|null,
     *     RuleId?: string|null,
     *     RuleOrder?: float|null,
     *     RuleName?: string|null,
     *     RuleStatus?: 'ENABLED'|'DISABLED'|null,
     *     Description?: string|null,
     *     Actions?: list<AutomationRulesActionTypeObjectV2>|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
